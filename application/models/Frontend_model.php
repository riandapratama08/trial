<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_model extends CI_Model
{
    public function dataPendaftar()
    {
        return $this->db->get('tb_daftar')->result_array();
    }

    public function tampil_data()
    {
        return $this->db->get('tb_daftar');
    }

    public function detailPendaftar($where)
    {
        $this->db->where('nomor_surat', $where);
        return $this->db->get('tb_daftar')->result_array();
    }
    public function tambahPendaftaran()
    {
        $a = $this->tambahProposal();
        $data = array(
            'nomor_surat' => $this->input->post('nomor_surat'),
            'nama' => $this->input->post('nama'),
            'asal' => $this->input->post('asal'),
            'jurusan' => $this->input->post('jurusan'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal_magang' => $this->input->post('tanggal_magang'),
            'lama_magang' => $this->input->post('lama_magang'),
            'berkas_magang' => $a['file_name'],
            'surat_balasan' => 'Tidak Ada',
            'status' => 'Belum Dikonfirmasi',
            'surat_balasan' => 'Tidak Ada',
        );
        return $this->db->insert('tb_daftar', $data);
    }

    public function tambahProposal()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 5120;
        $config['remove_spaces']        = TRUE;
        $config['overwrite']            = TRUE;
        $config['file_name']            = $this->input->post('nama') . "_proposal";

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('berkas_magang')) {
            echo "Error";
        } else {
            return $this->upload->data();
        }
    }
}
