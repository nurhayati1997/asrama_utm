<?php
defined('BASEPATH') or exit('No direct script access allowed');

class evaluasi_control extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		$this->template->load('template', 'evaluasi');
	}

	public function tampil()
	{
		if ($this->session->userdata("rule") == 0) {
			echo json_encode($this->db_model->get_all("v_analisa")->result());
		} else if ($this->session->userdata("rule") == 1) {
			echo json_encode($this->db_model->get_where('v_analisa', array('rule' => 1))->result());
		}else{
			echo json_encode($this->db_model->get_where('v_analisa', array('rule' => 2))->result());
		}
	}
}
