@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Surat Keterangan Kematian</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $kategori }}" name="kategori" >
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" required>
                        </div>    
                        <div class="form-group col-md-6">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" >
                         </div>
                        <div class="form-group col-md-6">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nm_kk" >
                        </div>
                    </div>
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Jenazah</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="nik" required >
                        </div>     
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" required >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Jenis Kelamin</label>
                            <select name="jk" class="form-control" required>
                                <option selected>-- Jenis Kelamin --</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">perempuan</option>
                            </select>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat lahir</label>
                            <input class="form-control" type="text" name="tmpt_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tgl_lahir" >
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputState">umur jenazah</label>
                        <input class="form-control" type="number" name="umur" >
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputState">jam meninggal jenazah</label>
                        <input class="form-control" type="text" name="jam_meninggal" required >
                        </div>              
                        <div class="form-group col-md-6">
                            <label for="inputState">Agama</label>
                            <select name="agama" class="form-control">
                                <option selected>-- Agama --</option>
                                <option value="islam">Islam</option>
                                <option value="katholik">Katholik</option>
                                <option value="kristen">Kristen</option>
                                <option value="hindhu">Hindhu</option>
                                <option value="budha">Budha</option>
                            </select>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" required >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="alamat" required >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Anak Ke</label>
                            <input class="form-control" type="text" name="anak_ke" required >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Meninggal Tanggal</label>
                            <input class="form-control" type="date" name="meninggal_tgl" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Meninggal hari</label>
                            <input class="form-control" type="text" name="hari_meninggal" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Meninggal</label>
                            <input class="form-control" type="text" name="tmpt_meninggal" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Sebab Meninggal</label>
                            <input class="form-control" type="text" name="sebab" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Kematian</label>
                            <input class="form-control" type="text" name="tmpt_kematian" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Yang Menerangkan</label>
                            <input class="form-control" type="text" name="menerangkan" >
                        </div>
                    </div>
                       
                    
                    <hr class="border: 1px solid"/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ibu</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="ibu_nik" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="ibu_nama" >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="ibu_tmpt_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ibu_tgl_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="ibu_pekerjaan" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="ibu_alamat" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="ibu_kewarganegaraan" >
                        </div>
                    </div>
                     
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ayah</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="ayah_nik" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="ayah_nama" >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="ayah_tmpt_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ayah_tgl_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="ayah_pekerjaan" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="ayah_alamat" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="ayah_kewarganegaraan" >
                        </div>
                    </div>
                     
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Pelapor</h1>
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="pelapor_nik" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="pelapor_nama" >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="pelapor_tmpt_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="pelapor_tgl_lahir" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Umur</label>
                            <input class="form-control" type="number" name="pelapor_umur" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="pelapor_pekerjaan" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="pelapor_alamat" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lapor</label>
                            <input class="form-control" type="date" name="tgl_lapor" >
                        </div> 

                    </div>
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Saksi</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>saksi 1</h3>
                            <div class="form-group col-md-12">
                                <label for="inputState">NIK</label>
                                <input class="form-control" type="text" name="saksi1_nik" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Nama Lengkap</label>
                                <input class="form-control" type="text" name="saksi1_nama" >
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputState">Umur</label>
                                <input class="form-control" type="number" name="saksi1_umur" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Alamat</label>
                                <input class="form-control" type="text" name="saksi1_alamat" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>saksi 2</h3>
                            <div class="form-group col-md-12">
                                <label for="inputState">NIK</label>
                                <input class="form-control" type="text" name="saksi2_nik" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Nama Lengkap</label>
                                <input class="form-control" type="text" name="saksi2_nama" >
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputState">Umur</label>
                                <input class="form-control" type="number" name="saksi2_umur" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Alamat</label>
                                <input class="form-control" type="text" name="saksi2_alamat" >
                            </div>
                        </div>
                    </div>
                    <div class="text-left mt-4 mb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
  