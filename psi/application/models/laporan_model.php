<?php defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_model extends CI_Model
{
   private $_table = "laporan";

   public $id;
   public $jenis;
   public $logistik_diperlukan;
   public $kabupaten;
   public $kecamatan;
   public $desa;
   public $kodepos;
   public $tingkatKerusakan;
   public $jumlahKorban;

public function __construct(){

        parent ::__construct();

        
    $this->load->model('fuzzy');


    }

    public function rules()
    {
        return [
            ['field' => 'jenis',
            'label' => 'jenis',
            'rules' => 'required'],

            ['field' => 'logistik_diperlukan',
            'label' => 'logistik_diperlukan',
            'rules' => 'required'],

            ['field' => 'kabupaten',
            'label' => 'kabupaten',
            'rules' => 'required'],

            ['field' => 'kecamatan',
            'label' => 'kecamatan',
            'rules' => 'required'],

            ['field' => 'desa',
            'label' => 'desa',
            'rules' => 'required'],

            ['field' => 'kodepos',
            'label' => 'kodepos',
            'rules' => 'required'],

            ['field' => 'tingkatKerusakan',
            'label' => 'tingkatKerusakan',
            'rules' => 'required'],

            ['field' => 'jumlahKorban',
            'label' => 'jumlahKorban',
            'rules' => 'required'],
        ];
    }

   public function getAll(){
    return $this->db->get($this->_table)->result();
   }

   

   public function getById($id){
    return $this->db->get_where($this->_table, ["id" => $id])->row();
   }

   public function save(){
        
        $tingkatKerusakan = $this->input->post('tingkatKerusakan');
        $jumlahKorban = $this->input->post('jumlahKorban');
        $rekomendasi = $this->Fuzzy->fuzzy($tingkatKerusakan,$jumlahKorban);
        if($rekomendasi<=50){
          $prioritas="Rendah";
        } else if($rekomendasi>50){
          $prioritas="Tinggi";
        }
        $post = $this->input->post();
        $this->id_trc = $post["id_trc"];
        $this->jenis = $post["jenis"];
        $this->logistik_diperlukan = $post["logistik_diperlukan"];
        $this->kabupaten = $post["kabupaten"];
        $this->kecamatan = $post["kecamatan"];
        $this->desa = $post["desa"];
        $this->kodepos = $post["kodepos"];
        $this->tingkatKerusakan = $post["tingkatKerusakan"];
        $this->jumlahKorban = $post["jumlahKorban"];
        $this->prioritas = $prioritas;
        $this->db->insert($this->_table, $this);  
   }

     public function getTable() 
  {
    $this->db->select('laporan.*, trc.nama');
    $this->db->from('laporan');
    $this->db->join('trc', 'trc.id = laporan.id_trc');
    $query = $this->db->get();
    return $query->result();
  }
 
 
}