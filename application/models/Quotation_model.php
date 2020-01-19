<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class quotation_model extends CI_Model
{
	
	function __construct()
	{

	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['brand_name'=>$this->security->xss_clean($this->input->post('brand')),
			   'created_by'=>$this->session->userdata('id')];

				   $this->db->insert('brands',$data);
				if($this->db->affected_rows() > 0)
					return TRUE;
				else
					return FALSE;
		}
		else
		{
			$data=['brand_name'=>$this->security->xss_clean($this->input->post('brand')),
			   'edited_by'=>$this->session->userdata('id'),
				'edited_on'=>date('Y-m-d H:i:s')];

				$this->db->where('id',$id);
				return $this->db->update('brands',$data);
		}
	}

}
 ?>