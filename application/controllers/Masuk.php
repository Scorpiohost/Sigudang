<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk_model');
		$this->load->model('barang_model');
		$this->load->library('form_validation');
		$login = $this->session->userdata('username')->username;
		if ($login == null) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$masuk = $this->masuk_model->getAll();
		$this->load->view('barang_masuk', ['masuk' => $masuk]);
	}

	public function tambah()
	{
		$barang = $this->barang_model->getAll();
		$masuk 	= $this->masuk_model;
		$validation = $this->form_validation;
        $validation->set_rules($masuk->rules());
        if ($validation->run()) {
            $masuk->kd_transaksi   = $this->input->post('kode');
            $masuk->kd_barang      = $this->input->post('barang');
            $masuk->stok_masuk 	   = $this->input->post('stok');
            $masuk->tanggal        = $this->input->post('date');
            $masuk->insert();
            redirect("masuk");
        }
		$this->load->view('tambah_masuk', ['barang' => $barang]);
	}

	public function edit($kode) 
	{
		$barang = $this->barang_model->getAll();
		$masuk 	= $this->masuk_model;
		$validation = $this->form_validation;
        $validation->set_rules($masuk->rules());
        if ($validation->run()) {
            $masuk->kd_transaksi   = $this->input->post('kode');
            $masuk->kd_barang      = $this->input->post('barang');
            $masuk->stok_masuk 	   = $this->input->post('stok');
            $masuk->tanggal        = $this->input->post('date');
            $masuk->update();
            redirect("masuk");
        }
		$this->load->view('editmasuk', [
			'barang' => $barang,
			'info'   => $masuk->getById($kode)
		]);
	}
}
