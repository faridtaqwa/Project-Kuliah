@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Surat Pengantar Pindah</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $kategori }}" name="kategori" >
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" >
                    </div>    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Diri</h1>
                    <div class="row">
                                                <div class="form-group col-md-6">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="nik" >
                    </div>     
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat lahir</label>
                        <input class="form-control" type="text" name="tmpt_lahir" >
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" >
                    </div>         
                    <div class="form-group col-md-6">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nama_kk" >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="alamat" >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Desa</label>
                        <input class="form-control" type="text" name="desa" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Kecamatan</label>
                        <input class="form-control" type="text" name="kecamatan" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Tujuan Alamat</label>
                        <input class="form-control" type="text" name="tujuan_alamat" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Tujuan Desa</label>
                        <input class="form-control" type="text" name="tujuan_desa" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Tujuan Kecamatan</label>
                        <input class="form-control" type="text" name="tujuan_kecamatan" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Tujuan Kabupaten / Kota</label>
                        <input class="form-control" type="text" name="tujuan_kabupaten" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Tujuan Provinsi</label>
                        <input class="form-control" type="text" name="tujuan_provinsi" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Jumlah Pindah</label>
                        <input class="form-control" type="text" name="jumlah_pindah" >
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
  