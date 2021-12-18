@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Surat keterangan</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $kategori }}" name="kategori" >
                    <div class="form-group col-md-6">
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
                            <label for="inputState">Jenis Kelamin</label>
                            <select name="jk" class="form-control">
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
                            <input class="form-control" type="date" name="tgl_lahir" >
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
                            <label for="inputState">Status Kawin</label>
                            <select name="status_kawin" class="form-control">
                                <option selected>-- Status --</option>
                                <option value="kawin">Kawin</option>
                                <option value="belum kawin">Belum Kawin</option>
                            </select>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="alamat" >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tujuan</label>
                            <input class="form-control" type="text" name="tujuan" >
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Keperluan</label>
                            <input class="form-control" type="text" name="keperluan" >
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
  