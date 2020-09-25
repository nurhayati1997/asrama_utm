<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_control extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		// if ($this->session->userdata("kode")) {
		// 	redirect("dashboard");
		// }
		if ($this->session->userdata("id_pengguna")) {
			redirect('home_control');
		} else {
			$data['title'] = "Login";
			$this->load->view('login', $data);
		}
	}

	public function ambilData()
	{
		echo json_encode($this->db_model->get_all($this->input->get('target'))->result());
	}

	private function login()
	{
			$data['title'] = "Login";
			$nama = $this->input->post("nama");
			$password = $this->input->post("password");
			$user = $this->db_model->get_where("pengguna", ["username" => $nama])->row_array();

		// 	if ($user) {
		// 		if (password_verify($password, $user['password'])) {
		// 			$data = [
		// 				'id_pengguna' => $user['id_pengguna'],
		// 				'username' => $user['username'],
		// 				'rule' => $user['rule']
		// 			];
		// 			$this->session->set_userdata($data);

		// 			redirect('home_control');
		// 		} else {
		// 			$this->session->set_flashdata('gagal_login', 'Maaf, Password anda salah :(');
		// 			$this->load->view('login', $data);
		// 		}
		// 	} else {
		// 		$this->session->set_flashdata('gagal_login', 'Silahkan Pilih pengguna dulu ya :)');
		// 		$this->load->view('login', $data);
		// 	}
		// }

		// public function logout()
		// {
		// 	$this->session->unset_userdata('id_pengguna');
		// 	$this->session->unset_userdata('nama');
		// 	$this->session->set_flashdata('berhasil_logout', 'Anda telah berhasil log out. Terimkasih :)');
		// 	$data['title'] = "Login";
			redirect('login', $data);
		echo json_encode($this->input->post("nama"));
	}

	function coba()
	{
		$data['title'] = "Login";
		$nama = $this->input->post("nama");
		$password = $this->input->post("pass");
		$user = $this->db_model->get_where("pengguna", ["id_pengguna" => $nama, "hapus" => 0])->row_array();

		if ($user) {
			if (md5($password) == $user['password']) {
				$data = [
					'id_pengguna' => $user['id_pengguna'],
					'username' => $user['username'],
					'rule' => $user['rule']
				];
				$this->session->set_userdata($data);
				echo json_encode("");
			} else {
				echo json_encode("Maaf Password Salah");
			}
		} else {
			echo json_encode("Maaf Pengguna tidak Ditemukan");
		}
	}

	// public function logout()
	// {
	// 	$this->session->unset_userdata('id_pengguna');
	// 	$this->session->unset_userdata('nama');
	// 	redirect('login_control');
	// }
}
