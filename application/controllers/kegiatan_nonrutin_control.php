<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kegiatan_nonrutin_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->template->load('template', 'kegiatan_nonrutin');
	}


	public function tampil()
	{
		if ($this->session->userdata("rule") == 0) {
			echo json_encode($this->db_model->get_all("v_kegiatan_nonrutin")->result());
		} else if ($this->session->userdata("rule") == 1) {
			echo json_encode($this->db_model->get_where('v_kegiatan_nonrutin', array('rule' => 2, 'penanggung_jawab' => $this->session->userdata("id_pengguna")))->result());
		}
	}

	public function tambah()
	{
		$data = [
			"id_pengguna" => $this->input->post("id", TRUE),
			"tanggal" => $this->input->post("tanggal", TRUE),
			"jenis_kegiatan" => $this->input->post("jk", TRUE)
		];
		$this->db_model->insert('kegiatan_norutin', $data);
		echo json_encode($data);
	}

	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('pengguna', ["id_pengguna" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$data = [
			"tanggal" => $this->input->post("tanggal", TRUE),
			"jenis_kegiatan" => $this->input->post("jk", TRUE)
		];
		$this->db_model->update('kegiatan_nonrutin', $data, array('id_kegiatan_nonrutin' => $this->input->post('id', TRUE)));

		echo json_encode("");
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete("kegiatan_nonrutin", ['id_kegiatan_nonrutin' => $this->input->post('id', TRUE)]));
	}

	public function get_username()
	{
		// echo json_encode("yey");
		if ($this->session->userdata("rule") == 0) {
			echo json_encode($this->db_model->get_where('pengguna', array('rule' => 1, 'hapus' => 0))->result());
		} else if ($this->session->userdata("rule") == 1) {
			echo json_encode($this->db_model->get_where('pengguna', array('rule' => 2, 'hapus' => 0))->result());
		}
	}

}
