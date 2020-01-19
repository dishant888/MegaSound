<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class customer_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['name'=>ucwords($this->security->xss_clean($this->input->post('name'))),
			'company'=>$this->security->xss_clean($this->input->post('company')),
			'gst_no'=>$this->security->xss_clean($this->input->post('gst')),
			'address'=>$this->security->xss_clean($this->input->post('address')),
			'state_code'=>$this->security->xss_clean($this->input->post('state')),
			'city_code'=>$this->security->xss_clean($this->input->post('city')),
			'contact'=>$this->security->xss_clean($this->input->post('contact')),
			'email'=>$this->security->xss_clean($this->input->post('email')),
			'created_by'=>$this->session->userdata('id')];

			$this->db->insert('customers',$data);
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
			$data=['name'=>ucwords($this->security->xss_clean($this->input->post('name'))),
			'company'=>$this->security->xss_clean($this->input->post('company')),
			'gst_no'=>$this->security->xss_clean($this->input->post('gst')),
			'address'=>$this->security->xss_clean($this->input->post('address')),
			'state_code'=>$this->security->xss_clean($this->input->post('state')),
			'city_code'=>$this->security->xss_clean($this->input->post('city')),
			'contact'=>$this->security->xss_clean($this->input->post('contact')),
			'email'=>$this->security->xss_clean($this->input->post('email')),
			'edited_by'=>$this->session->userdata('id'),
			'edited_on'=>date('Y-m-d H:i:s')];

			$this->db->where('id',$id);
			return $this->db->update('customers',$data);
		}
	}

	public function getCustomers($id=FALSE)
	{
			$this->db->select('all_cities.city_name as city');
			$this->db->select('all_states.state_name as state');
			$this->db->select('customers.name as name');
			$this->db->select('customers.id as id');
			$this->db->select('customers.company as company');
			$this->db->select('customers.gst_no as gst');
			$this->db->select('customers.address as address');
			$this->db->select('customers.contact as contact');
			$this->db->join('all_cities','customers.city_code=all_cities.city_code','inner');
			$this->db->join('all_states','customers.state_code=all_states.state_code','inner');
		if($id==FALSE)
		{
			$this->db->where('customers.delete_status',0);
			$this->db->order_by('customers.id','desc');
			$query=$this->db->get('customers');
			//print_r($this->db->last_query());exit();
			return $query->result();
		}
		else
		{
			$this->db->select('all_cities.city_code as city_code');
			$this->db->select('all_states.state_code as state_code');
			$this->db->select('customers.gst_no as gst');
			$this->db->select('customers.email as email');
			$this->db->where('customers.id',$id);
			$query=$this->db->get('customers');
			//print_r($this->db->last_query());exit();
			return $query->row_array();
		}
	}

	public function delete($id)
	{
		$this->db->select('email');
		$this->db->from('customers');
		$this->db->where('id',$id);
		$reault_array = $this->db->get()->result_array();
		$email= $reault_array[0]['email'];
		$data=['delete_status'=>1,'email'=>'deleted['.$email.']'];
		$this->db->where('id',$id);
		return $this->db->update('customers',$data);
	}

	public function checkEmail($email)
	{
		$this->db->where('email',$email);
		$this->db->where('delete_status',0);
		$query=$this->db->get('customers');
		return $query->num_rows();
	}
}
 ?>
