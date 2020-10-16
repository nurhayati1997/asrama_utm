<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perizinan_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->template->load('template', 'perizinan');
	}

	public function tampil()
	{
		if ($this->session->userdata("rule") == 0) {
			echo json_encode($this->db_model->get_all("v_perizinan")->result());
		} else if ($this->session->userdata("rule") == 1) {
			echo json_encode($this->db_model->get_where('v_perizinan', array('rule' => 2, 'penanggung_jawab' => $this->session->userdata("id_pengguna")))->result());
		}
	}

	public function tambah_data()
	{
		$data = [
			"id_pengguna" => $this->input->post("id", TRUE),
			"tgl_izin" => $this->input->post("tgl_izin", TRUE),
			"jam_izin" => $this->input->post("jam_izin", TRUE),
			"tgl_kembali" => $this->input->post("tgl_kembali", TRUE),
			"jam_kembali" => $this->input->post("jam_kembali", TRUE),
			"keterangan" => $this->input->post("keterangan", TRUE)
		];
		$this->db_model->insert('perizinan', $data);
		echo json_encode($data);
	}

	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('v_perizinan', ["id_perizinan" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$data = [
			"tgl_izin" => $this->input->post("tgl_izin", TRUE),
			"jam_izin" => $this->input->post("jam_izin", TRUE),
			"tgl_kembali" => $this->input->post("tgl_kembali", TRUE),
			"jam_kembali" => $this->input->post("jam_kembali", TRUE),
			"keterangan" => $this->input->post("keterangan", TRUE)
		];
		$this->db_model->update('perizinan', $data, array('id_perizinan' => $this->input->post('id', TRUE)));
		echo json_encode("");
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete("pengguna", ['id_pengguna' => $this->input->post('id', TRUE)]));
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
