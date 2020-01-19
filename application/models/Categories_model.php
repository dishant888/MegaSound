<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class categories_model extends CI_Model
{
	
	function __construct()
	{

	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['category_name'=>$this->security->xss_clean($this->input->post('child')),
				   'parent_id'=>$this->security->xss_clean($this->input->post('parent')),
			       'created_by'=>$this->session->userdata('id')];

				   $this->db->insert('categories',$data);
				if($this->db->affected_rows() > 0)
					return TRUE;
				else
					return FALSE;
		}
		else
		{
			$data=['category_name'=>$this->security->xss_clean($this->input->post('child')),
				   'parent_id'=>$this->security->xss_clean($this->input->post('parent')),
			       'edited_by'=>$this->session->userdata('id'),
				   'edited_on'=>date('Y-m-d H:i:s')];

				$this->db->where('id',$id);
				return $this->db->update('categories',$data);
		}
	}

	public function get($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->db->where('delete_status',0);
			$this->db->order_by('id','DESC');
			$query=$this->db->get('categories');
			if($query)
					return $query->result_array();
				else
					return FALSE;
		}
		else
		{
			$this->db->where('id',$id);
			$query=$this->db->get('categories');
			if($query)
					return $query->row_array();
				else
					return FALSE;
		}
	}

	public function check($child,$parent)
	{
		if($parent==''){$parent=0;}
		$this->db->where('category_name',$child);
		$this->db->where('parent_id',$parent);
		$this->db->where('delete_status',0);
		$query=$this->db->get('categories');
		return $query->num_rows();
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$data=['delete_status'=>1];
		return $this->db->update('categories',$data);
	}

	public function options()
	{
		$this->db->where('parent_id',0);
		$this->db->where('delete_status',0);
		$query=$this->db->get('categories');
		return $query->result_array();
	}
}
 ?>