<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class trc_model extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('trc',$data);
       }


  public function getAll() 
    {
      return $this->db->get('trc')->result();
    }
  }