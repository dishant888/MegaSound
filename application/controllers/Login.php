<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->session->sess_destroy();
		$data['title']='LOGIN';
		$this->load->view('login/index',$data);
	}

	public function check()
	{
		$data['username']=$this->security->xss_clean($this->input->post('username'));
		$data['password']=$this->security->xss_clean($this->input->post('password'));
		$result=$this->login_model->verify($data);
		if($result)
		{
			$this->session->set_userdata('id',$result['id']);
			echo base_url('admin');
		}
		else
		{
			echo 0;
		}
	}
}
 ?>