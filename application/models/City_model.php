<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class city_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function getCities($id=FALSE,$city_code=FALSE)
	{
		if($id==TRUE)
		{
			$this->db->where('state_code', $id);
			$this->db->order_by('city_name', 'ASC');
			$query = $this->db->get('all_cities');
			$output='<option value="">---Select City---</option>';

			if($city_code==FALSE)
			{
				foreach ($query->result() as $row) {
					$output.='<option value="'.$row->city_code.'">'.$row->city_name.'</option>';
				}
				return $output;
			}
			else
			{
				foreach ($query->result() as $row) {
					if($city_code==$row->city_code)
					$output.='<option selected value="'.$row->city_code.'">'.$row->city_name.'</option>';
					else
					$output.='<option value="'.$row->city_code.'">'.$row->city_name.'</option>';
				}
				return $output;
			}
		}
		else
		{
				$this->db->order_by('city_name','ASC');
				$query=$this->db->get('all_cities');

			if($city_code==FALSE)
			{
				$output='<option value="">---Select City---</option>';
				foreach ($query->result() as $row) {
						$output.='<option value="'.$row->city_code.'">'.$row->city_name.'</option>';
					}
					return $output;
			}
			else
			{
				$output='';
				foreach ($query->result() as $row) {
					if($city_code==$row->city_code)
					$output.='<option selected value="'.$row->city_code.'">'.$row->city_name.'</option>';
					else
					$output.='<option value="'.$row->city_code.'">'.$row->city_name.'</option>';
				}
				return $output;
			}
		}
	}
	
	public function city_get(){
		$this->db->order_by('city_name','ASC');
		$city=$this->db->get('all_cities');
		if($city->num_rows() > 0){
			return $city->result();
		}else{
			return false;
		}
	}
}
 ?>