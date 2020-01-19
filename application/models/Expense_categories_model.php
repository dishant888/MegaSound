<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class expense_categories_model extends CI_Model
{
	
	function __construct()
	{

	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['expense_name'=>$this->security->xss_clean($this->input->post('expense')),
			   'created_by'=>$this->session->userdata('id')];

				   $this->db->insert('expense_categories',$data);
				if($this->db->affected_rows() > 0)
					return TRUE;
				else
					return FALSE;
		}
		else
		{
			$data=['expense_name'=>$this->security->xss_clean($this->input->post('expense')),
			   'edited_by'=>$this->session->userdata('id'),
				'edited_on'=>date('Y-m-d H:i:s')];

				$this->db->where('id',$id);
				return $this->db->update('expense_categories',$data);
		}
	}

	public function get($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->db->where('delete_status',0);
			$this->db->order_by('id','DESC');
			$query=$this->db->get('expense_categories');
			if($query)
					return $query->result_array();
				else
					return FALSE;
		}
		else
		{
			$this->db->where('id',$id);
			$query=$this->db->get('expense_categories');
			if($query)
					return $query->row_array();
				else
					return FALSE;
		}
	}

	public function check($expense_name)
	{
		$this->db->where('expense_name',$expense_name);
		$this->db->where('delete_status',0);
		$query=$this->db->get('expense_categories');
		return $query->num_rows();
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$data=['delete_status'=>1];
		return $this->db->update('expense_categories',$data);
	}
}
 ?>