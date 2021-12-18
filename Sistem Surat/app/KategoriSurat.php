<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriSurat extends Model
{

    protected $table = 'kategori_surats';
    protected $casts=['data_template'=>'array'];//cast mengubah seluruh value dari data template ke dalam tipe aray
    protected $guarded = ['id'];

    public function pengajuan()
    {
        // relasi 1 to many
        return $this->hasMany(DataPengajuan::class);
    }
}
