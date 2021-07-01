<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("kategori_model");
        $this->load->library('form_validation');
        $this->simple_login->cek_login();
    }

	public function index()
	{
		$data["kategori"] = $this->kategori_model->getAll();
        $this->load->view("kategori/datakategori", $data);
	}

	public function tambah(){
		$kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            redirect('kategori/kategori/index','tes');
            //$this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		$this->load->view("kategori/tambah");

	}
}
