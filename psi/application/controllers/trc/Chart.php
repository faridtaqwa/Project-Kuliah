<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->simple_login_trc->cek_login();
    $this->load->model('grafik_model');
  }

  public function index(){
  	$x['kriteria']=$this->grafik_model->statistik_kriteria();
  	//$x['data']=$this->grafik_model->get_data_stok();
  $this->load->view('laporan/chart',$x);

  }



 
}
