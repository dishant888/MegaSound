<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class login_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function verify($data=FALSE)
	{
		if($data==FALSE)
		{
			return FALSE;
		}

		$query=$this->db->get_where('admins',['username'=>$data['username'],'password'=>$data['password']]);
		if($query)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}
}
 ?>