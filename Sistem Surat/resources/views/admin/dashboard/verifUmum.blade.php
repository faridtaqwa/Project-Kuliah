{{--  {{ dd($data) }}  --}}
@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Verifikasi Surat Keterangan</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('send.verifikasi') }}" method="POST" enctype="multipart/form-data">
                @csrf   
                    <input hidden value="{{ $data->data_id }}" name="id_data" >                  
                    <input hidden value="{{ $data->pengajuan_id }}" name="id_pengaju" >
                    <input hidden value="{{ $data->pesanan_id }}" name="id_pesanan" >
                    <input hidden value="{{ $data->halaman }}" name="kat" >
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" value="{{ $data->nama_pemesan }}" readonly
                    </div>    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Diri</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="nik" value="{{ $data->nik }}">
                        </div>
                    <div class="row" >
                    </div>     
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option selected >{{$data->jk }}</option>
                            <option value="L">Laki - Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat lahir</label>
                        <input class="form-control" type="text" name="tmpt_lahir" value="{{ $data->tempat_lahir }}">
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">agama</label>
                        <select name="agama" class="form-control">
                            <option selected >{{$data->agama }}</option>
                            <option value="islam">islam</option>
                            <option value="katholik">katholik</option>
                            <option value="kristen">kristen</option>
                            <option value="hindu">hindu</option>
                            <option value="buda">buda</option>
                            <option value="konghucu">konghucu</option>

                        </select>
                    </div>        
                    <div class="form-group col-md-6">
                        <label for="inputState">Status Kawin</label>
                        <select name="status_kawin" class="form-control">
                            <option selected> {{ $data->status_kawin }}</option>
                            <option value="kawin">kawin</option>
                            <option value="belum kawin"> belum kawin</option>
                            {{--  @switch($data->status_kawin)
                                @case('kawin')
                                <option value="kawin">Kawin</option>   
                                    @break
                                @case('belum kawin')
                                <option value="belum kawin">Belum Kawin</option>
                                    @break                               
                            @endswitch    --}}
                        </select>
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="pekerjaan" value="{{ $data->pekerjaan }}">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Tujuan</label>
                        <input class="form-control" type="text" name="tujuan" value="{{ $data->tujuan }}">
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Keperluan</label>
                        <input class="form-control" type="text" name="keperluan" value="{{ $data->keperluan }}">
                    </div>
                    </div>
                    
                    <div class="form-group col-md-6 mx-5 align-item-center">
                        <button type="submit" class="btn btn-primary">Verifikasi</button>
                        <button type="button" class="btn btn-danger btn-md  ml-5" data-toggle="modal" data-target="#myModal">Tolak</button>
                    </div>
                    
            </form>
            
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content p-3">
            <form class="mt-1 mb-1 "  action="{{ route('tolak') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="modal-title">Tolak Pesanan</h4>
                    <input hidden value="{{ $data->halaman }}" name="kat" >
                    <input hidden value="{{ $data->pesanan_id }}" name="idpesantolak" >
                    <div class="modal-body">
                    <input type="text" class="form-control" name="alasantolak" placeholder="tambahkan alasan" >
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-danger">Tolak</button>
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                    </div>  
            </form>
        </div>
        
        </div>
    </div>
  
@endsection

@section('js')

@endsection
  