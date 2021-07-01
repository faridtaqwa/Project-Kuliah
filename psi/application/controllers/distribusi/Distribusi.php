<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('distribusi_model');
    $this->simple_login->cek_login();
  }

  public function index(){
        $data["distribusi"] = $this->distribusi_model->getAll();
        

    $this->load->view('distribusi/datadistribusi',$data);
  }


  public function desa(){
        $data["desa"]=$this->distribusi_model->get_all_pengeluaran();

    $this->load->view('distribusi/datadesa',$data);
  }

  public function input(){
   $this->load->view('distribusi/tambah');
  }

  public function proses_input(){
    $distribusi = array(
       'namaPengirim' => $this->input->post('namaPengirim'),
       'namaPenerima' => $this->input->post('namaPenerima'),
       'tgl_distribusi' => $this->input->post('tgl_distribusi')
    );

    $desa = array(
       'namaDesa' => $this->input->post('namaDesa'),
       'lokasi' => $this->input->post('lokasi'),
       'id_logistik' => $this->input->post('id_logistik'),
       'stok_logistik' => $this->input->post('stok_logistik')
    );

    $this->distribusi_model->tambah_data($distribusi,$desa);
    redirect('distribusi/distribusi');
  }

}
