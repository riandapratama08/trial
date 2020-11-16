<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function daftarAkun()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			'level' => 'Umum',
			'tanggal' => date('Y-m-d'),
		);
		return $this->db->insert('user', $data);
	}

	public function cekAkun($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('user');
	}
}
