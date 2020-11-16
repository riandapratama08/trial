<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Operator_model');
	}

	public function index()
	{
		$data1 = $this->Operator_model->dataPendaftar();
		$data2 = $this->Operator_model->jumlahPendaftar();
		$data3 = $this->Operator_model->jumlahPendaftarDiterima();
		$data = array(
			'umum' => $data1,
			'jumlahpendaftar' => $data2,
			'jumlahditerima' => $data3,
		);
		$this->load->view('Operator/index', $data);
	}

	public function detailpendaftaran($id)
	{
		$data1 = $this->Operator_model->detailPendaftar($id)->row_array();
		$data = array(
			'detail' => $data1,
		);
		$this->load->view('Operator/detailpendaftar', $data);
	}

	public function konfirmasipendaftar($id)
	{
		$this->Operator_model->konfirmasiPendaftar($id);
		$this->session->set_flashdata('sukses', 'Berhasil Dikonfirmasi');
		redirect(base_url('operator'));
	}
}
