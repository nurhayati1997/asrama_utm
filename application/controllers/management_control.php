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
		echo json_encode($this->db_model->get_all("pengguna")->result());
	}

	public function tambah()
	{
		$data = [
			"jurusan" => $this->input->post("jurusan", TRUE),
			"jenis_kelamin" => $this->input->post("jk", TRUE),
			"username" => $this->input->post("username", TRUE),
			"gedung" => $this->input->post("gedung", TRUE),
			"kamar" => $this->input->post("kamar", TRUE),
			"no_hp" => $this->input->post("no", TRUE),
			"alamat" => $this->input->post("alamat", TRUE),
			"rule" => $this->input->post("level", TRUE),
			"hapus" => 0,
			"password" => md5(12345)
		];
		$this->db_model->insert('pengguna', $data);
		echo json_encode($data);
	}

	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('pengguna', ["id_pengguna" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$data = [
			"jurusan" => $this->input->post("jurusan", TRUE),
			"jenis_kelamin" => $this->input->post("jk", TRUE),
			"username" => $this->input->post("user", TRUE),
			"gedung" => $this->input->post("gedung", TRUE),
			"kamar" => $this->input->post("kamar", TRUE),
			"no_hp" => $this->input->post("no", TRUE),
			"alamat" => $this->input->post("alamat", TRUE),
			"rule" => $this->input->post("level", TRUE)
		];
		$this->db_model->update('pengguna', $data, array('id_pengguna' => $this->input->post('id', TRUE)));

		if ($this->input->post("pass", TRUE) != "") {
			$data = [
				"password" => md5($this->input->post("pass", TRUE))
			];
			$this->db_model->update('pengguna', $data, array('id_pengguna' => $this->input->post('id', TRUE)));
		}
		echo json_encode("");
	}

	public function hapus()
	{
		$data = [
			"hapus" => 1
		];
		echo json_encode($this->db_model->update('pengguna', $data, array('id_pengguna' => $this->input->post('id', TRUE))));
	}
}
