<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class evaluasi_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		$data['evaluasi'] = $this->db_model->get_all('penilaian_warga')->result_array();
		
		$this->template->load('template', 'evaluasi');
	}
}
