<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
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
		$this->load->model('pengguna_model');
		$this->load->model('barang_model');
		$this->load->model('kategori_model');
		$login = $this->session->userdata('username')->username;
		if ($login == null) { redirect(base_url('login')); }
	}

	public function index()
	{
		$data 		= $this->masuk_model->getAll();
		$pengguna 	= $this->pengguna_model->count();
		$barang 	= $this->barang_model->count();
		$kategori   = $this->kategori_model->count();
		$this->load->view('beranda', [
			'masuk'		 => $data,
			'pengguna'	 => $pengguna,
			'barang'	 => $barang,
			'kategori'	 => $kategori
		]);
	}
}
