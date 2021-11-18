<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('kategori_model');
        $this->load->library('form_validation');
        $login = $this->session->userdata('username')->username;
        if ($login == null) {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $barang = $this->barang_model->getAll();
        $this->load->view('barang', ['barang' => $barang]);
    }

    public function tambah()
    {
        $kategori   = $this->kategori_model->getAll();
        $barang     = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());
        if ($validation->run()) {
            $barang->kd_barang   = $this->input->post('kode');
            $barang->nama        = $this->input->post('nama');
            $barang->id_kategori = $this->input->post('kategori');
            $barang->stok        = $this->input->post('stok');
            $barang->insert();
            redirect("barang");
        }
        $this->load->view('tambahbarang', ['kategori' => $kategori]);
    }

    public function edit($kode)
    {
        $kategori   = $this->kategori_model->getAll();
        $barang     = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());
        if ($validation->run()) {
            $barang->kd_barang   = $this->input->post('kode');
            $barang->nama        = $this->input->post('nama');
            $barang->id_kategori = $this->input->post('kategori');
            $barang->stok        = $this->input->post('stok');
            $barang->update();
            redirect("barang");
        }
        $this->load->view(
            'editbarang',
            [
                'kategori'   => $kategori,
                'barang'     => $barang->getById($kode)
            ]
        );
    }

    public function hapus($kode)
    {
        $barang 		    = $this->barang_model;
		$barang->kd_barang 	= $kode;
		$barang->delete();
		redirect("barang");
    }
}
