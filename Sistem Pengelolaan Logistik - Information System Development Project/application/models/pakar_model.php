<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pakar_model extends CI_Model
{
   public function getAll() 
    {
      return $this->db->get('variable')->result();
    }

      public function get($id) {
    return $this->db->where('id', $id)->get('variable')->row();
  }

  public function Update($data, $id)
  {
    return $this->db->where('id', $id)->update('variable', $data);
  }
}