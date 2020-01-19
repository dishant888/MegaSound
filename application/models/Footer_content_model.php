<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class footer_content_model extends CI_Model
{
	
	function __construct()
	{

	}

	public function add()
	{
		$data=['description'=>$this->security->xss_clean($this->input->post('description')),
		   	   'created_by'=>$this->session->userdata('id')];

			   $this->db->insert('quotation_footer_content',$data);
			if($this->db->affected_rows() > 0)
				return TRUE;
			else
				return FALSE;
	}

	public function get()
	{
		$this->db->order_by('id','DESC');
		$query=$this->db->get('quotation_footer_content');
		if($query)
				return $query->result_array();
			else
				return FALSE;
	}

	public function check($genset_name)
	{
		$this->db->where(['description'=>$genset_name]);
		$query=$this->db->get('quotation_footer_content');
		return $query->num_rows();
	}

	public function delete($id)
	{
		$data = $this->db->where('id',$id);
		return $this->db->delete('quotation_footer_content',$data);
	}
}
 ?>