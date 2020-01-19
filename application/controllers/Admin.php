<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('rights_model');
	}

	public function index()
	{
		//echo $this->session->userdata('id');
		$data['title']='Dashboard';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}

	public function menu()
	{
		$data['title'] = 'Menu';
		$result['parents']=$this->menu_model->get();
		$this->load->view('templates/header',$data);
		$this->load->view('menu/index',$result);
		$this->load->view('templates/footer');
	}

	public function addMenu()
	{
		$result=$this->menu_model->add();
		if($result)	
		{
			$this->session->set_flashdata('added','Menu Added Successfully...');
			redirect(base_url('admin/menu'));
		}
	}

	public function rights()
	{
		$data['title'] = 'User Rights';
		$result['admins'] = $this->rights_model->getAdmins();
		$result['parents'] = $this->menu_model->getParent();
		$result['childs'] = $this->menu_model->getChild();
		$this->load->view('templates/header',$data);
		$this->load->view('rights/index',$result);
		$this->load->view('templates/footer');
	}

	public function addRights()
	{
		$result=$this->rights_model->add();
		if($result)	
		{
			$this->session->set_flashdata('added','Menu Added Successfully...');
			redirect(base_url('admin/rights'));
		}
	}

	public function getRights()
	{
		if($this->input->post('admin_id'))
		{
			$result=$this->rights_model->get($this->input->post('admin_id'));
			echo json_encode($result);
		}
	}

	public function unauthorized()
	{
		$this->load->view('errors/unauthorized');
	}
}
 ?>