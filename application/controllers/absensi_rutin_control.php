<?php
defined('BASEPATH') or exit('No direct script access allowed');

class absensi_rutin_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->template->load('template', 'absensi_rutin');
	}

	public function tampil()
	{
		if ($this->session->userdata("rule") == 0) {
			echo json_encode($this->db_model->get_all("v_absensi_rutin")->result());
		} else if ($this->session->userdata("rule") == 1) {
			echo json_encode($this->db_model->get_where('v_absensi_rutin', array('rule' => 2, 'penanggung_jawab' => $this->session->userdata("id_pengguna")))->result());
		}
	}

	public function tambah()
	{
		$data = [
			"id_pengguna" => $this->input->post("id", TRUE),
			"tanggal" => $this->input->post("tanggal", TRUE),
			"qiyamul_lail" => $this->input->post("ql", TRUE),
			"subuh" => $this->input->post("subuh", TRUE),
			"taklim" => $this->input->post("taklim", TRUE),
			"isyak" => $this->input->post("isyak", TRUE),
			"maghrib" => $this->input->post("maghrib", TRUE),
			"jam_malam" => $this->input->post("jam", TRUE)
		];
		$this->db_model->insert('absensi_rutin', $data);
		echo json_encode($data);
	}

	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('v_absensi_rutin', ["id_absensi_rutin" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$data = [
			"tanggal" => $this->input->post("tanggal", TRUE),
			"qiyamul_lail" => $this->input->post("ql", TRUE),
			"subuh" => $this->input->post("subuh", TRUE),
			"taklim" => $this->input->post("taklim", TRUE),
			"isyak" => $this->input->post("isyak", TRUE),
			"maghrib" => $this->input->post("maghrib", TRUE),
			"jam_malam" => $this->input->post("jam", TRUE)
		];
		$this->db_model->update('absensi_rutin', $data, array('id_absensi_rutin' => $this->input->post('id', TRUE)));

		echo json_encode("");
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete("absensi_rutin", ['id_absensi_rutin' => $this->input->post('id', TRUE)]));
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
