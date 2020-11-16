<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['content'] = 'home';
		$this->load->view('frontend/index', $data);
	}

	public function visimisi()
	{
		$data['content'] = 'tentang_visimisi';
		$this->load->view('frontend/index', $data);
	}

	public function alur()
	{
		$data['content'] = 'alur_pendaftaran';
		$this->load->view('frontend/index', $data);
	}

	public function pendaftaran()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');

		if ($this->form_validation->run() == TRUE) {
			echo 'form is validation';
		}


		$data['content'] = 'form_pendaftaran';
		$this->load->view('frontend/index', $data);
	}

	public function pengumuman()
	{
		$data['content'] = 'pengumuman_pendaftaran';
		$data['pendaftar'] = $this->frontend_model->tampil_data()->result();
		$this->load->view('frontend/index', $data);
	}
}
