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
    

    public function tampil()
	{
		if ($this->session->userdata("rule") == 0) {
			echo json_encode($this->db_model->get_all("v_pengaduan")->result());
		} else if ($this->session->userdata("rule") == 1) {
			echo json_encode($this->db_model->get_where('v_pengaduan', array('rule' => 2, 'penanggung_jawab' => $this->session->userdata("id_pengguna")))->result());
		} else{
			echo json_encode($this->db_model->get_where('v_pengaduan', array('id_pengguna' => $this->session->userdata("id_pengguna")))->result());
		}
	}

	public function tambah_data()
	{
		$data = [
			"id_pengguna" => $this->input->post("id", TRUE),
			"tanggal" => $this->input->post("tanggal", TRUE),
			"catatan_pengelola" => $this->input->post("catatan_pengelola", TRUE),
			"catatan_ph" => $this->input->post("catatan_ph", TRUE),
			"catatan_pg" => $this->input->post("catatan_pg", TRUE)
		];
		$this->db_model->insert('catatan_to_asrama', $data);
		echo json_encode($data);
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

	function ubah_list()
	{
		echo json_encode($this->db_model->get_where('v_pengaduan', ["id_catatan_to_asrama" => $this->input->post('id', TRUE)])->result());
	}

	public function ubah()
	{
		$data = [
			"tanggal" => $this->input->post("tanggal", TRUE),
			"catatan_pengelola" => $this->input->post("catatan_pengelola", TRUE),
			"catatan_ph" => $this->input->post("catatan_ph", TRUE),
			"catatan_pg" => $this->input->post("catatan_pg", TRUE)
		];
		$this->db_model->update('catatan_to_asrama', $data, array('id_catatan_to_asrama' => $this->input->post('id', TRUE)));

		echo json_encode("");
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete("catatan_to_asrama", ['id_catatan_to_asrama' => $this->input->post('id', TRUE)]));
	}
}
