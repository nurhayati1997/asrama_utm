<?php
defined('BASEPATH') or exit('No direct script access allowed');

class management_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->template->load('template', 'super_admin');
	}

	public function tampil()
	{
		echo json_encode($this->db_model->get_all("login")->result());
	}
}
