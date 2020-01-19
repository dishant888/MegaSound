<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class venue_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function add($id=FALSE)
	{
		if($id==FALSE)
		{
			$data=['venue_name'=>$this->security->xss_clean($this->input->post('venue')),
				'city_code'=>$this->input->post('city'),
				'created_by'=>$this->session->userdata('id'),
				];

			$this->db->insert('venues',$data);
			if($this->db->affected_rows() > 0)
				return TRUE;
			else
				return FALSE;
		}
		else
		{
			$data=['venue_name'=>$this->security->xss_clean($this->input->post('venue')),
				'city_code'=>$this->input->post('city'),
				'edited_by'=>$this->session->userdata('id'),
				'edited_on'=>date('Y-m-d H:i:s')
				];

				$this->db->where('id',$id);
				$query=$this->db->update('venues',$data);
				return $query;
		}
	}

	public function get($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->db->select('venues.venue_name');
			$this->db->select('venues.id as id');
			$this->db->select('all_cities.city_name as city');
			$this->db->join('all_cities','venues.city_code=all_cities.city_code','inner');
			$this->db->where('venues.delete_status',0);
			$this->db->order_by('venues.id','DESC');
			$query=$this->db->get('venues');
			if($query)
				return $query->result_array();
			else
				return FALSE; 
		}
		else
		{
			$this->db->select('venues.venue_name as venue_name_by_id');
			$this->db->select('venues.id as venue_id');
			$this->db->select('all_cities.city_code as city_code');
			$this->db->select('all_cities.city_name as city_name');
			$this->db->join('all_cities','venues.city_code=all_cities.city_code','inner');
			$this->db->where('venues.id',$id);
			$query=$this->db->get('venues');
			if($query)
				return $query->row_array();
			else
				return FALSE;

		}
	}

	public function check($venue_name,$city_code)
	{
		$this->db->where('venue_name',$venue_name);
		$this->db->where('city_code',$city_code);
		$this->db->where('delete_status',0);
		$query=$this->db->get('venues');
		return $query->num_rows();
	}

	public function delete($id)
	{
		$data=['delete_status'=>1];
		$this->db->where('id',$id);
		return $this->db->update('venues',$data);
	}
}
 ?>