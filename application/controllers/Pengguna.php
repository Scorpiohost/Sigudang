<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->library('form_validation');
		$login = $this->session->userdata('username')->username;
		if ($login == null) { redirect(base_url('login')); }
	}

	public function index()
	{
		$pengguna = $this->pengguna_model->getAll();
		$this->load->view('pengguna', ['pengguna' => $pengguna]);
	}

	public function tambah()
	{
		$pengguna 	= $this->pengguna_model;
		$validation = $this->form_validation;
		$validation->set_rules($pengguna->rules());
		if ($validation->run()) {
			$pengguna->username = $this->input->post('username');
			$pengguna->password = $this->input->post('password');
			$pengguna->insert();
			redirect("pengguna");
		}
		$this->load->view('tambahpengguna');
	}

	public function hapus($id)
	{
		$pengguna 		= $this->pengguna_model;
		$pengguna->id 	= $id;
		$pengguna->delete();
		redirect("pengguna");
	}
}
