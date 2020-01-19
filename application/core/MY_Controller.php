<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('id'))
		{
			redirect(base_url());
		}

		$this->db->select(['menus.parent_id','menus.name','menus.controller','menus.action']);
		$this->db->join('menus','menus.id=user_rights.menu_id');
		$this->db->where('user_rights.admin_id',$this->session->userdata('id'));
		$query=$this->db->get('user_rights');
		$childs=$query->result_array();

		$allowed_urls[]='';
		foreach ($childs as $child) {
			$allowed_urls[]=$child['action'];
		}

		array_push($allowed_urls, 'index');
		if(in_array($this->router->method, $allowed_urls))
		{
			$user_right=array('permission'=>1);
			$this->session->set_userdata('user_rights',$user_right);
		}
		else
		{
			$user_right=array('permission'=>0);
			$this->session->set_userdata('user_rights',$user_right);
			//redirect(base_url('Unauthorized'));
		}
	}
}
 ?>