<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("laporan_model");
        $this->load->library('form_validation');
        $this->load->model("Fuzzy");
        $this->simple_login_trc->cek_login();
    }

	public function index()
	{
		$data["laporan"] = $this->laporan_model->getAll();
        $this->load->view("laporan/datalaporan", $data);
	}

	public function tambah(){
        $this->load->model('trc_model');

        $data['trc'] = $this->trc_model->getAll();

		$laporan = $this->laporan_model;
        $validation = $this->form_validation;
        $validation->set_rules($laporan->rules());

        if ($validation->run()) {
            $laporan->save();
            redirect('laporan/laporan/index','tes');
            //$this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		$this->load->view("laporan/tambah",$data);

	}
}
