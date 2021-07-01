 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('pusdalops_model'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('nama', 'nama','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('kabupaten','kabupaten','required');
         $this->form_validation->set_rules('kecamatan','kecamatan','required');
         $this->form_validation->set_rules('desa','desa','required');
         $this->form_validation->set_rules('alamat','alamat','required');
         $this->form_validation->set_rules('kodepos','kodepos','required');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/register');
         }else{
             $data['nama']   =    $this->input->post('nama');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
             $data['alamat'] =    $this->input->post('alamat');
             $data['kabupaten'] =    $this->input->post('kabupaten');
             $data['kecamatan'] =    $this->input->post('kecamatan');
             $data['desa'] =    $this->input->post('desa');
             $data['kodepos'] =    $this->input->post('kodepos'); 
             $this->pusdalops_model->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('account/sukses',$pesan);
         }
     }
 }