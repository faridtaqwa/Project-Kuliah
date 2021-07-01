<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class grafik_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_data_stok(){
        $query = $this->db->query("select * from logistik");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function statistik_stok(){
        $query = $this->db->query("SELECT jenisKategori,SUM(kuantitas) AS tot_kuantitas FROM logistik JOIN kategori ON id_kategori=id_kategoris GROUP BY jenisKategori");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

     function statistik_kriteria(){
        $query = $this->db->query("SELECT prioritas,COUNT(prioritas) AS jumlah from laporan GROUP BY prioritas");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
