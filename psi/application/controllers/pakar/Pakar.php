<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar extends CI_Controller {

public function __construct(){
            parent:: __construct();
            $this->load->model("pakar_model");
            $this->simple_login->cek_login();
        }
        public function index()
        {
          $data["pakar"] = $this->pakar_model->getAll();
            $this->load->view("pakar/datapakar", $data);
        }

         public function edit($id)
        {
            $this->load->model('pakar_model');
            $data['pakar'] = $this->pakar_model->get($id);
            $this->load->view('pakar/editdata', $data);
        }

        public function update(){
            $this->load->model('pakar_model'); 
            $id = $this->input->post('id');
            $min = $this->input->post('min');
            $max = $this->input->post('max');

            $data = [
                'min' => $min,
                'max' => $max
            ];

        $save = $this->pakar_model->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('pakar/pakar');
    }

}
