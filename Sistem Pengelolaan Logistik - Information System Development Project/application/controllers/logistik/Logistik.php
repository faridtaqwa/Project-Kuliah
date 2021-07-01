<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logistik extends CI_Controller {

public function __construct(){
            parent:: __construct();
            $this->load->model("logistik_model");
            $this->simple_login->cek_login();
        }
        public function index()
        {
            $data["logistik"] = $this->logistik_model->getTable();
            $this->load->view("logistik/datalogistik", $data);
        }

        public function tambahData()
        {
            $this->load->model('kategori_model');

            $data['kategori'] = $this->kategori_model->getAll();

            $this->load->view('logistik/tambah', $data);
        }
        public function simpanData()
        {
            $this->load->model('logistik_model');
            $namaLogistik = $this->input->post('namaLogistik');
            $kuantitas = $this->input->post('kuantitas');
            $kategori = $this->input->post('kategori');
            $tgl_kedaluwarsa = $this->input->post('tgl_kedaluwarsa');
            $data = [
                'namaLogistik' => $namaLogistik,
                'kuantitas' => $kuantitas,
                'id_kategori' => $kategori,
                'tgl_kedaluwarsa' => $tgl_kedaluwarsa
            ];

            $simpan = $this->logistik_model->insert($data);

            if ($simpan) {
                $this->session->set_flashdata('msg_success', 'Data sudah tersimpan');       
            }else {
                $this->session->set_flashdata('msg_error', 'Data gagal disimpan');
            }
            redirect('logistik/logistik');
        }

        public function edit($id)
        {
            $this->load->model('kategori_model');
            $this->load->model('logistik_model');

            $data['kategori'] = $this->kategori_model->getAll();

            $data['logistik'] = $this->logistik_model->get($id);

            $this->load->view('logistik/editdata', $data);
        }

        public function update(){
            $this->load->model('logistik_model'); 
            $id = $this->input->post('id');
            $namaLogistik = $this->input->post('namaLogistik');
            $kuantitas = $this->input->post('kuantitas');
            $id_kategori = $this->input->post('kategori');
            $tgl_kedaluwarsa = $this->input->post('tgl_kedaluwarsa');

            $data = [
                'namaLogistik' => $namaLogistik,
                'kuantitas' => $kuantitas,
                'id_kategori' => $id_kategori,
                'tgl_kedaluwarsa' => $tgl_kedaluwarsa 
            ];

        $save = $this->logistik_model->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('logistik/logistik');
    }

         public function delete($id){
        $this->load->model('logistik_model');

        $delete = $this->logistik_model->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('logistik/logistik');
        }
}
