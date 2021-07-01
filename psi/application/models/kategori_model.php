<?php defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model
{
	private $_table = "kategori";

   public $id;
   public $jenisKategori;

    public function rules()
    {
        return [
            ['field' => 'jenisKategori',
            'label' => 'jenisKategori',
            'rules' => 'required']
        ];
    }
   public function getById($id){
    return $this->db->get_where($this->_table, ["id" => $id])->row();
   }

   public function save(){
        $post = $this->input->post();
        $this->jenisKategori = $post["jenisKategori"];
        $this->db->insert($this->_table, $this);  
   }

  public function getAll() 
    {
      return $this->db->get('kategori')->result();
    }
}
