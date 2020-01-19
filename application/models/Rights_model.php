<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class rights_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function getAdmins()
	{
		$query=$this->db->get('admins');
		return $query->result();
	}

	public function add()
	{
		$admin_id=$this->input->post('admin');
		$this->db->where('admin_id',$admin_id);
		$this->db->delete('user_rights');
		foreach($_POST['user_rights'] as $user_right) {

			$menu_id=$user_right['menu_id'];
			$data=['admin_id'=>$admin_id,'menu_id'=>$menu_id];
			$this->db->insert('user_rights',$data);
		}
		return TRUE;
	}

	public function get($id)
	{
		$this->db->select('menu_id');
		$this->db->where('admin_id',$id);
		$query=$this->db->get('user_rights');
		return $query->result_array();
	}
}
 ?>