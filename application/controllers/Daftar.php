<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Frontend_model');
    }
    public function index()
    {
        $data['daftar'] = $this->m_daftar->tampildata()->result();

        $this->load->view('frontend/part/navbar');
        $this->load->view('frontend/daftar', $data);
        $this->load->view('frontend/part/footer');
    }

    public function tambah_aksi()
    {
        $this->Frontend_model->tambahPendaftaran();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect(base_url('pengumuman'));
    }
}
