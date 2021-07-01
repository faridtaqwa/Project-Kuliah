<?php defined('BASEPATH') OR exit('No direct script access allowed');

class logistik_model extends CI_Model
{
  public function getTable() 
  {
    $this->db->select('logistik.*, kategori.jenisKategori');
    $this->db->from('logistik');
    $this->db->join('kategori', 'kategori.id_kategoris = logistik.id_kategori');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function insert($data) 
  {
    return $this->db->insert('logistik', $data);
  }

  public function get($id) {
    return $this->db->where('id', $id)->get('logistik')->row();
  }

  public function Update($data, $id)
  {
    return $this->db->where('id', $id)->update('logistik', $data);
  }

  public function delete($id) {
    return $this->db->where('id', $id)->delete('logistik');
  }
}