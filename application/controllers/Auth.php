<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function prosesDaftar()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} else {
			$this->Auth_model->daftarAkun();
			$this->session->set_flashdata('sukses', 'Berhasil Mendaftar');
			redirect(base_url('login'));
			echo "Berhasil Mendaftar";
		}
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function prosesLogin()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} else {
			$cek = $this->Auth_model->cekAkun($email);
			if ($cek->num_rows() > 0) {
				$data = $cek->row_array();
				if (password_verify($password, $data['password'])) {
					if ($data['level'] == 'Admin') {
						$this->session->set_userdata('email', $data['email']);
						$this->session->set_userdata('level', $data['level']);
						$this->session->set_userdata('status', 'Login');
						redirect(base_url('admin'));
					}
					if ($data['level'] == 'Operator') {
						$this->session->set_userdata('email', $data['email']);
						$this->session->set_userdata('level', $data['level']);
						$this->session->set_userdata('status', 'Login');
						redirect(base_url('Operator'));
					}
				} else {
					$this->session->set_flashdata('gagal', 'Password Salah');
					redirect(base_url('login'));
				}
			} else {
				$this->session->set_flashdata('gagal', 'Akun Tidak Ditemukan');
				redirect(base_url('login'));
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	public function akunadmin()
	{
		$email = "admin" . rand(1, 9) . time();
		$pass = password_hash("123", PASSWORD_BCRYPT);

		$data = array(
			'email' => $email,
			'password' => $pass,
			'level' => 'Admin',
			'tanggal' => date('Y-m-d'),
		);
		$this->db->insert('user', $data);
		echo "<script>alert('Berhasil');</script>";
	}

	public function akuninstan()
	{
		$email = "Operator" . rand(1, 9) . time();
		$pass = password_hash("123", PASSWORD_BCRYPT);

		$data = array(
			'email' => $email,
			'password' => $pass,
			'level' => 'Operator',
			'tanggal' => date('Y-m-d'),
		);
		$this->db->insert('user', $data);
		echo "<script>alert('Berhasil');</script>";
	}
}
