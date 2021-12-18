@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Surat Keterangan Kelahiran</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $kategori }}" name="kategori" >
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" required>
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" required >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nm_kk" required >
                    </div>
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Bayi / Anak</h1>
                    <div class="row">
                    {{--  <div class="form-group col-md-6">
                        <label for="inputState">NIK (Kosongkan Jika Tidak Ada)</label>
                        <input class="form-control" type="text" name="nik" >
                    </div>       --}}
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_bayi" required >
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
                        <label for="inputState">Tempat Dilahirkan</label>
                        <input class="form-control" type="text" name="tmpt_lahiran" placeholder="contoh:Rumah sakit" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat Kelahiran</label>
                        <input class="form-control" type="text" name="tmpt_lahir" required>
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Hari Lahir</label> 
                        <input class="form-control" type="text" name="hari_lahir" required >
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">jam lahir</label>
                        <input class="form-control" type="number" step="0.001" name="jam_lahir" required>
                    </div>       
                    <div class="form-group col-md-6">
                        <label for="inputState">Jenis Kelahiran</label>
                        <input class="form-control" type="text" name="jns_lahiran" required >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Kelahiran Ke (dengan huruf)</label>
                        <input class="form-control" type="text" name="kelahiran_ke" required>
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Penolong Kelahiran</label>
                        <input class="form-control" type="text" name="pnlg_kelahiran" required >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Berat Bayi (Dalam kg)</label>
                        <input class="form-control" type="number" step="0.01" name="berat" required>
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Panjang Bayi (Dalam cm)</label>
                        <input class="form-control" type="number" step="0.001" name="panjang" required>
                    </div>
                    </div>

                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ibu</h1>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="ibu_nik" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="ibu_nm" required>
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="ibu_tmpt_lahir" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="ibu_tgl_lahir" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="ibu_pekerjaan" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="ibu_almt" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Kewarganegaraan</label>
                        <input class="form-control" type="text" name="ibu_warganegara" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Pencatatan Perkawinan</label>
                        <input class="form-control" type="text" name="ibu_tgl_kawin" >
                    </div>
                    </div>
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ayah</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="ayah_nik" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="ayah_nm" required>
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="ayah_tmpt_lahir" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="ayah_tgl_lahir" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="ayah_pekerjaan" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="ayah_almt" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Kewarganegaraan</label>
                        <input class="form-control" type="text" name="ayah_warganegara" required>
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
                        <input class="form-control" type="text" name="pelapor_nm" required >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="pelapor_tmpt_lahir" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="pelapor_tgl_lahir" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Umur</label>
                        <input class="form-control" type="number" name="pelapor_umur" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="pelapor_pekerjaan" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="pelapor_almt" required >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lapor</label>
                        <input class="form-control" type="date" name="tgl_lapor" >
                    </div> 

                    </div>
                    
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">
                                <h1 class="h3 mb-0 text-gray-800 col-md-12">Data Saksi 1</h1>
                            <div class="form-group col-md-12">
                                <label for="inputState">NIK</label>
                                <input class="form-control" type="text" name="saksi1_nik"  >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Nama Lengkap</label>
                                <input class="form-control" type="text" name="saksi1_nm" >
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputState">Umur</label>
                                <input class="form-control" type="number" name="saksi1_umur" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Alamat</label>
                                <input class="form-control" type="text" name="saksi1_almt" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="h3 mb-0 text-gray-800 col-md-12">Data Saksi 2</h1>
                            <div class="form-group col-md-12">
                                <label for="inputState">NIK</label>
                                <input class="form-control" type="text" name="saksi2_nik" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Nama Lengkap</label>
                                <input class="form-control" type="text" name="saksi2_nm" >
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputState">Umur</label>
                                <input class="form-control" type="number" name="saksi2_umur" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Alamat</label>
                                <input class="form-control" type="text" name="saksi2_almt" >
                            </div> 
                        </div>
                         
                    </div>
                    

                    <hr/>
                        
                    
                    
                    <div class="text-left mt-4 mb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
  