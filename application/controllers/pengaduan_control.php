<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengaduan_control extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $this->template->load('template', 'pengaduan');
    }
}
