<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class state_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function getStates()
	{
		$query=$this->db->get('all_states');
		return $query->result_array();
	}
}
 ?>