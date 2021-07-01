 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login_trc->cek_login();
     }
 
     //Load Halaman dashboard
     public function index() {
         $this->load->view('trc/dashboard');
     }
 }