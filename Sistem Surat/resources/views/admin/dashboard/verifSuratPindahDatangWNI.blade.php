@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800"> Verifikasi Surat Pindah Datang wni</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('send.verifikasi') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $data->data_id }}" name="id_data" > 
                    <input hidden value="{{ $data->pengajuan_id }}" name="id_pengaju" >
                    <input hidden value="{{ $data->pesanan_id }}" name="id_pesanan" >
                    <input hidden value="{{ $data->halaman }}" name="kat" >
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" value="{{ $data->nama_pemesan }}">
                    </div>    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Daerah Asal</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" value="{{ $data->no_kk }}">
                        </div>  
                        <div class="form-group col-md-6">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nama_kk" value="{{ $data->nama_kk }}">
                        </div>
                         <div class="form-group col-md-6">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}">
                        </div>     
                        <div class="form-group col-md-6">
                            <label for="inputState">Desa / Kelurahan</label>
                            <input class="form-control" type="text" name="desa" value="{{ $data->desa }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Kecamatan</label>
                            <input class="form-control" type="text" name="kecamatan" value="{{ $data->kecamatan }}">
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="inputState">Kab / Kota</label>
                            <input class="form-control" type="text" name="kabupaten" value="{{ $data->kabupaten }}">
                        </div>         
                        <div class="form-group col-md-6">
                            <label for="inputState">Provinsi</label>
                            <input class="form-control" type="text" name="provinsi" value="{{ $data->provinsi }}">
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Kodepos</label>
                            <input class="form-control" type="text" name="kodepos" value="{{ $data->kodepos }}">
                        </div> 
                        <div class="form-group col-md-6">
                        <label for="inputState">NIK Pemohon</label>
                        <input class="form-control" type="text" name="nik_pemohon" value="{{ $data->nik_pemohon }}">
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tmpt_lahir" value="{{ $data->tmpt_lahir }}">
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                        </div>
                    </div>
                      
                   
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Kepindahan</h1>
                    <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Status KK</label>
                                <select name="tujuan_kk" class="form-control">
                                    <option selected>{{ $data->tujuan_kk }}</option>
                                    <option value="Numpang">Numpang</option>
                                    <option value="Membuat KK Baru">Membuat Kk Baru</option>
                                    <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                                </select>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputState">Nomor Kartu Keluarga</label>
                                <input class="form-control" type="text" name="tujuan_no_kk" value="{{ $data->tujuan_no_kk }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Nama Kepala Keluarga</label>
                                <input class="form-control" type="text" name="tujuan_nama_kk" value="{{ $data->tujuan_nama_kk }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Tanggal Kedatangan</label>
                                <input class="form-control" type="date" name="tgl_datang" value="{{ $data->tgl_datang }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Alamat yang Dituju</label>
                                <input class="form-control" type="text" name="tujuan_alamat" value="{{ $data->tujuan_alamat }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Desa / Kelurahan</label>
                                <input class="form-control" type="text" name="tujuan_desa" value="{{ $data->tujuan_desa }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Kecamatan</label>
                                <input class="form-control" type="text" name="tujuan_kecamatan" value="{{ $data->tujuan_kecamatan }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Kabupaten</label>
                                <input class="form-control" type="text" name="tujuan_kabupaten" value="{{ $data->tujuan_kabupaten }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Provinsi</label>
                                <input class="form-control" type="text" name="tujuan_provinsi" value="{{ $data->tujuan_provinsi }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Kodepos</label>
                                <input class="form-control" type="text" name="tujuan_kodepos" value="{{ $data->tujuan_kodepos }}">
                            </div>
                    </div>
                    
                    <div class="form-group col-md-8">
                       <h1 class="h3 mb-0 text-gray-800">Keluarga Yang Pindah</h1>
                    </div>
                    <hr>
                    <div class="form-group col-md-12">
                        @foreach ($data_kel as $item)
                            <div class="form-group row">
                            <div class="row col-auto" style="flex: 1 1 1px;">
                                <div class="col-3">
                                    <input type="text" hidden name="data[id][]" required value="{{ $item->id }}">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" name="data[nik][]" required value="{{ $item->nik }}">    
                                </div>
                                <div class="col-4">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="data[nama_kel][]" required  value="{{ $item->nama }}">    
                                </div>
                                <div class="col-3">
                                    <label>Masa Berlaku KTP</label>
                                    <input type="text" class="form-control" name="data[masa_berlaku][]" value="{{ $item->masa_berlaku }}">    
                                </div>
                                <div class="col-2">
                                    <label>SHDK</label>
                                    <input type="text" class="form-control" name="data[shdk][]" required value="{{ $item->shdk }}">    
                                </div>
                            </div>
                            </div>
                        @endforeach
                        
                    </div>

                    <div class="text-left mt-4 mb-4 d-flex align-content-beetween">
                        <button type="submit" class="btn btn-primary">Verifikasi</button>
                        <button type="button" class="btn btn-danger btn-md  ml-5" data-toggle="modal" data-target="#myModal">Tolak</button>

                    </div>
            </form>
        </div>
    </div>

    {{--  modal  --}}
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
  