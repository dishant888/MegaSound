<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class bank_model extends CI_Model
{
	
	function __construct()
	{

	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['bank_name'=>ucwords($this->security->xss_clean($this->input->post('bank'))),
				   'description'=>$this->security->xss_clean($this->input->post('description')),
			       'created_by'=>$this->session->userdata('id')];

				   $this->db->insert('bank_details',$data);
				if($this->db->affected_rows() > 0)
					return TRUE;
				else
					return FALSE;
		}
		else
		{
			$data=['bank_name'=>ucwords($this->security->xss_clean($this->input->post('bank'))),
				   'description'=>$this->security->xss_clean($this->input->post('description')),
			       'edited_by'=>$this->session->userdata('id'),
				   'edited_on'=>date('Y-m-d H:i:s')];

				$this->db->where('id',$id);
				return $this->db->update('bank_details',$data);
		}
	}

	public function get($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->db->where('delete_status',0);
			$this->db->order_by('id','DESC');
			$query=$this->db->get('bank_details');
			if($query)
					return $query->result_array();
				else
					return FALSE;
		}
		else
		{
			$this->db->where('id',$id);
			$query=$this->db->get('bank_details');
			if($query)
					return $query->row_array();
				else
					return FALSE;
		}
	}

	public function check($bank_name,$description)
	{
		$this->db->where('bank_name',$bank_name);
		$this->db->where('description',$description);
		$this->db->where('delete_status',0);
		$query=$this->db->get('bank_details');
		return $query->num_rows();
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$data=['delete_status'=>1];
		return $this->db->update('bank_details',$data);
	}
}
 ?>