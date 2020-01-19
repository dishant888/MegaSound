<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Menu_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function add()
	{
		$data=['name'=>$this->input->post('name'),'parent_id'=>$this->input->post('parent'),'controller'=>$this->input->post('controller'),'action'=>$this->input->post('action')];
		$this->db->insert('menus',$data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get()
	{
		$query=$this->db->get('menus');
		if($query)
			return $query->result();
	}

	public function getParent()
	{
		$this->db->where('parent_id',0);
		$query=$this->db->get('menus');
		return $query->result();
	}

	public function getChild()
	{
		$this->db->where('parent_id<>',0);
		$query=$this->db->get('menus');
		return $query->result();
	}
}
 ?>
