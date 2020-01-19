<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class JobSheet extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Job Sheet';
		$this->load->view('templates/header',$data);
		$this->load->view('jobsheet/index');
		$this->load->view('templates/footer');
	}
}
 ?>