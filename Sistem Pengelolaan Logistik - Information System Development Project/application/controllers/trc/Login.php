<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
     public function index() {
 
         // Fungsi Login
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
             $this->simple_login_trc->login($username,$password, base_url('trc/dashboard'), base_url('trc/login'));
         }
         // End fungsi login
         $this->load->view('trc/login');
     }
 
     public function logout(){
         $this->simple_login_trc->logout();
     }        
 }