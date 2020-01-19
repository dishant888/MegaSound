<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class item_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['item_name'=>$this->security->xss_clean($this->input->post('item')),
				  'brand_id'=>$this->security->xss_clean($this->input->post('brand')),
				  'category_id'=>$this->security->xss_clean($this->input->post('category')),
				  'cost'=>$this->security->xss_clean($this->input->post('cost')),
				  'description'=>$this->security->xss_clean($this->input->post('description')),
				  'created_by'=>$this->session->userdata('id')
				 ];

			$this->db->insert('items',$data);

			$item_id = $this->db->insert_id();
			$ledger=['item_id'=>$item_id,
					 'status'=>'in',
					 'rate'=>$this->security->xss_clean($this->input->post('cost')),
					 'source_id'=>$item_id,
					 'source_model'=>'Items',
					 'transaction_date'=>date('d-m-Y')
						];
			$this->db->insert('item_ledgers',$ledger);
			 if($this->db->affected_rows()>0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			$data=['item_name'=>$this->security->xss_clean($this->input->post('item')),
				  'brand_id'=>$this->security->xss_clean($this->input->post('brand')),
				  'category_id'=>$this->security->xss_clean($this->input->post('category')),
				  'cost'=>$this->security->xss_clean($this->input->post('cost')),
				  'description'=>$this->security->xss_clean($this->input->post('description')),
				  'edited_by'=>$this->session->userdata('id'),
				  'edited_on'=>date('Y-m-d H:i:s')
				 ];
				 $this->db->where('id',$id);
				 return $this->db->update('items',$data);
		}
	}

	public function get($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->db->where('delete_status',0);
			$this->db->order_by('id','DESC');
			$query=$this->db->get('items');
			if($query)
				return $query->result_array();
			else
				return FALSE;
		}
		else
		{
			$this->db->select(['items.item_name','items.id','items.cost','items.description','brands.brand_name','categories.category_name','brands.id as brand_id','categories.id as category_id']);
			$this->db->join('brands','brands.id=items.brand_id','inner');
			$this->db->join('categories','categories.id=items.category_id','inner');
			$this->db->where(['items.id'=>$id,'items.delete_status'=>0]);
			$query=$this->db->get('items');
			return $query->row_array();
		}
	}

	public function getItems($brand_id, $category_id){
		$sql = "select * from items where brand_id='$brand_id' && 	category_id='$category_id && delete_status=0'";
		$data = $this->db->query($sql, array($brand_id, $category_id));
		if($data->num_rows() > 0){
			return $data->result();
		}else{
			return false;
		}
	}
//this function in multiple item select then call function using to ajax
	public function getItemById($item){
		$sql = "select * from items where id=?";
		$data = $this->db->query($sql, array($item));
		if($data->num_rows() > 0){
			return $data->row();
		}else{
			return false;
		}
	}

	public function delete($id)
	{
		$data=['delete_status'=>1];
		$this->db->where('id',$id);
		return $this->db->update('items',$data);
	}
}
 ?>