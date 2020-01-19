<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class boat_model extends CI_Model
{
	
	function __construct()
	{

	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['name'=>$this->security->xss_clean($this->input->post('boat')),
<<<<<<< HEAD
			    'boat_cost'=>$this->security->xss_clean($this->input->post('boat_cost')),
=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
			    'description'=>'',
			    'type'=>1,
			   'created_by'=>$this->session->userdata('id')];

				   $this->db->insert('gensets',$data);
				if($this->db->affected_rows() > 0)
					return TRUE;
				else
					return FALSE;
		}
		else
		{
			$data=['name'=>$this->security->xss_clean($this->input->post('boat')),
<<<<<<< HEAD
			       'boat_cost'=>$this->security->xss_clean($this->input->post('boat_cost')),
    			   'edited_by'=>$this->session->userdata('id'),
    			   'edited_on'=>date('Y-m-d H:i:s')];
=======
			   'edited_by'=>$this->session->userdata('id'),
				'edited_on'=>date('Y-m-d H:i:s')];
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c

				$this->db->where('id',$id);
				return $this->db->update('gensets',$data);
		}
	}

	public function get($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->db->where(['delete_status'=>0,'type'=>1]);
			$this->db->order_by('id','DESC');
			$query=$this->db->get('gensets');
			if($query)
					return $query->result_array();
				else
					return FALSE;
		}
		else
		{
			$this->db->where('id',$id);
			$query=$this->db->get('gensets');
			if($query)
					return $query->row_array();
				else
					return FALSE;
		}
	}

	public function check($boat_name)
	{
		$this->db->where(['name'=>$boat_name,'type'=>1]);
		$this->db->where('delete_status',0);
		$query=$this->db->get('gensets');
		return $query->num_rows();
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$data=['delete_status'=>1];
		return $this->db->update('gensets',$data);
	}
}
 ?>