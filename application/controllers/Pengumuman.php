<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Frontend_model');
    }

    public function index()
    {
        $data = array(
            'tabeldaftar' => $this->frontend_model->dataPengumuman()
        );
        $this->load->view('Frontend/index', $data);
    }

    public function tabelpengumuman()
    {
        $data1 = $this->Frontend_model->dataPengumuman();
        $data = array(
            'tabelpengumuman' => $data1,
        );
        $this->load->view('Frontend/pengumuman_pendaftaran', $data);
    }
}
