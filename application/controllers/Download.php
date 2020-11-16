<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->helper('download');
    }

    public function surat($nama)
    {
        $file = './uploads/' . $nama;
        force_download($file, NULL);
    }

    public function proposal($nama)
    {
        $file = './uploads/' . $nama;
        force_download($file, NULL);
    }

    public function cv($nama)
    {
        $file = './uploads/' . $nama;
        force_download($file, NULL);
    }

    public function photo($nama)
    {
        $file = './uploads/' . $nama;
        force_download($file, NULL);
    }
}
