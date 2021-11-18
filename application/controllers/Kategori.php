<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
		$this->load->library('form_validation');
		$login = $this->session->userdata('username')->username;
		if ($login == null) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$kategori = $this->kategori_model->getAll();
		$this->load->view('kategori', ['kategori' => $kategori]);
	}

	public function tambah()
	{
		$kategori 	= $this->kategori_model;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->rules());
		if ($validation->run()) {
			$kategori->kategori = $this->input->post('kategori');
			$kategori->insert();
			redirect("kategori");
		}
		$this->load->view('tambahkategori');
	}

	public function edit($id)
	{
		$kategori 	= $this->kategori_model;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->rules());
		if ($validation->run()) { 
			$kategori->id 		= $this->input->post('id');
			$kategori->kategori = $this->input->post('kategori');
			$kategori->update();
			redirect("kategori");
		}
		$this->load->view('editkategori', ['data' => $kategori->getById($id)]);
	}

	public function hapus($id)
	{
		$kategori 		= $this->kategori_model;
		$kategori->id 	= $id;
		$kategori->delete();
		redirect("kategori");
	}
}
