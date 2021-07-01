<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Created by: CodeCoding.ID
 * thanks for visit my website
 * www.codecoding.id
 */

class distribusi_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function tambah_data($distribusi,$desa){
    $this->db->trans_start();
      $id = $this->tambah_akun($distribusi);
      $desa['id_distribusi'] = $id;
      $this->tambah_user($desa);
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function tambah_akun($data){
    $this->db->insert('distribusi', $data);
    $id = $this->db->insert_id();
    return (isset($id)) ? $id : FALSE;
  }

  public function tambah_user($data){
    $res = $this->db->insert('desa', $data);
    return $res;
  }

    public function getAll() 
    {
      return $this->db->get('distribusi')->result();
    }
       public function getAllDesa() 
    {
      return $this->db->get('desa')->result();
    }

      public function getTable() 
  {
    $this->db->select('logistik.*, kategori.jenisKategori');
    $this->db->from('logistik');
    $this->db->join('kategori', 'kategori.id = logistik.id_kategori');
    $query = $this->db->get();
    return $query->result();
  }

      public function get_all_pengeluaran(){
      $this->db->select('*');
      $this->db->from('desa');
      $this->db->join('logistik','logistik.id = desa.id_logistik');
      return $this->db->get()->result();

    }
}
