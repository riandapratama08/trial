<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	/* USER */

	public function dataUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function detailUser($where)
	{
		$this->db->where('id', $where);
		return $this->db->get('user')->result_array();
	}

	public function tambahUser()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			'level' => $this->input->post('level'),
			'tanggal' => date('Y-m-d'),
		);
		return $this->db->insert('user', $data);
	}

	public function editUser($where)
	{
		$data = array(
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level'),
		);
		$this->db->where('id', $where);
		return $this->db->update('user', $data);
	}

	public function passwordUser($where)
	{
		$data = array(
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
		);
		$this->db->where('id', $where);
		return $this->db->update('user', $data);
	}

	public function hapusUser($where)
	{
		$this->db->where('id', $where);
		return $this->db->delete('user');
	}

	/* DAFTAR */

	public function dataPendaftar()
	{
		return $this->db->get('tb_daftar')->result_array();
	}

	public function detailPendaftar($where)
	{
		$this->db->where('nomor_surat', $where);
		return $this->db->get('tb_daftar');
	}

	public function daftarHapus($where)
	{
		$this->db->where('nomor_surat', $where);
		return $this->db->delete('tb_daftar');
	}

	public function editDaftar($where)
	{
		$a = $this->tambahBalasan();
		$data = array(

			'status' => $this->input->post('status'),
			'surat_balasan' => $a['file_name'],
		);
		$this->db->where('nomor_surat', $where);
		return $this->db->update('tb_daftar', $data);
	}

	public function tambahBalasan()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 5120;
		$config['remove_spaces']        = TRUE;
		$config['overwrite']            = TRUE;
		$config['file_name']            = $this->input->post('nomor_surat') . "_Surat_Balasan";

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('surat_balasan')) {
			echo "Error";
		} else {
			return $this->upload->data();
		}
	}

	/* PENGUMUMAN */

	public function prosesPengumuman()
	{
		$a = $this->tambahBukti();
		$data = array(
			'id' => $this->input->post('id'),
			'nomor_surat' => $this->input->post('nomor_surat'),
			'nama' => $this->input->post('nama'),
			'asal' => $this->input->post('asal'),
			'status' => $this->input->post('status'),
			'bukti' => $a['file_name'],
		);
		return $this->db->insert('tb_pengumuman', $data);
	}

	public function tambahBukti()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 1024;
		$config['remove_spaces']        = TRUE;
		$config['overwrite']            = TRUE;
		$config['file_name']            = $this->input->post('nama') . "_bukti_balasan";

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('bukti')) {
			echo "Error";
		} else {
			return $this->upload->data();
		}
	}

	/* JUMLAH */

	public function jumlahPendaftar()
	{
		return $this->db->get('tb_daftar')->num_rows();
	}

	public function jumlahPendaftarDiterima()
	{
		$this->db->where('status', 'Diterima');
		return $this->db->get('tb_daftar')->num_rows();
	}

	public function jumlahUser()
	{
		return $this->db->get('user')->num_rows();
	}
}
