<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator_model extends CI_Model
{

	public function dataPendaftar()
	{
		return $this->db->get('datapendaftar')->result_array();
	}

	public function detailPendaftar($where)
	{
		$this->db->where('id', $where);
		return $this->db->get('datapendaftar');
	}

	public function konfirmasiPendaftar($where)
	{
		$data = array(
			'status' => 'Diterima',
		);
		$this->db->where('id', $where);
		return $this->db->update('datapendaftar', $data);
	}

	// JUMLAH
	public function jumlahPendaftar()
	{
		return $this->db->get('datapendaftar')->num_rows();
	}

	public function jumlahPendaftarDiterima()
	{
		$this->db->where('status', 'Diterima');
		return $this->db->get('datapendaftar')->num_rows();
	}

	public function jumlahUser()
	{
		return $this->db->get('user')->num_rows();
	}
}
