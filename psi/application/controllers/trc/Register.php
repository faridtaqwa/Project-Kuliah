 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('trc_model'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('username', 'username','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('nama','nama','required');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('trc/register');
         }else{
             $data['username']   =    $this->input->post('username');
             $data['password'] =    md5($this->input->post('password'));
             $data['nama'] =    $this->input->post('nama');
 
             $this->trc_model->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('trc/sukses',$pesan);
         }
     }
 }