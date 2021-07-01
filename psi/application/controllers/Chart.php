<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->simple_login->cek_login();
    $this->load->model('grafik_model');
  }

  public function index(){
  	$x['report']=$this->grafik_model->statistik_stok();
  	//$x['data']=$this->grafik_model->get_data_stok();
  $this->load->view('logistik/chart',$x);

  }


 
}
