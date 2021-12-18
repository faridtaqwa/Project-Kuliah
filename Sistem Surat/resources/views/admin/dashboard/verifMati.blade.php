@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Verifikasi Surat Keterangan Kematian</h1>
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
                        <input class="form-control" type="text" name="nama_pemesan" readonly value="{{ $data->nama_pemesan }}">
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" value="{{ $data->no_kk }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nm_kk" value="{{ $data->nama_kk }}">
                    </div>
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Jenazah</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="nik" value="{{ $data->nik }}">
                        </div>     
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                @if ( $data->jk == "L")
                                <option value="L">Laki - Laki</option>
                                @else
                                <option value="P">perempuan</option>
                                @endif
                            </select>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat lahir</label>
                            <input class="form-control" type="text" name="tmpt_lahir" value="{{ $data->tmpt_lahir }}">
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="inputState">Umur jenazah</label>
                            <input class="form-control" type="text" name="umur" value="{{ $data->umur }}">
                        </div>   
                        <div class="form-group col-md-6">
                            <label for="inputState">Agama</label>
                            <select name="agama" class="form-control">
                                @switch($data->agama)
                                    @case('islam')
                                    <option value="islam">Islam</option>   
                                        @break
                                    @case('katholik')
                                    <option value="katholik">Katholik</option>
                                        @break
                                    @case('kristen')
                                    <option value="kristen">Kristen</option>   
                                        @break
                                    @case('hindhu')
                                    <option value="hindhu">Hindhu</option>
                                        @break
                                    @case('budha')
                                    <option value="budha">Budha</option>
                                        @break                                
                                @endswitch  
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
                            <label for="inputState">Anak Ke</label>
                            <input class="form-control" type="text" name="anak_ke" value="{{ $data->anak_ke }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Hari Meninggal </label>
                            <input class="form-control" type="text" name="hari_meninggal" value="{{ $data->hari_meninggal }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Meninggal Tanggal</label>
                            <input class="form-control" type="date" name="meninggal_tgl" value="{{ $data->meninggal_tgl }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Meninggal jam</label>
                            <input class="form-control" type="text" name="jam_meninggal" value="{{ $data->jam_meninggal }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Meninggal</label>
                            <input class="form-control" type="text" name="tmpt_meninggal" value="{{ $data->tmpt_meninggal }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Sebab Meninggal</label>
                            <input class="form-control" type="text" name="sebab" value="{{ $data->sebab }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Kematian</label>
                            <input class="form-control" type="text" name="tmpt_kematian" value="{{ $data->tmpt_kematian }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Yang Menerangkan</label>
                            <input class="form-control" type="text" name="menerangkan" value="{{ $data->menerangkan }}">
                        </div>
                    </div>
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ibu</h1>
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="ibu_nik" value="{{ $data->ibu_nik }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="ibu_nama" value="{{ $data->ibu_nama }}">
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="ibu_tmpt_lahir" value="{{ $data->ibu_tmpt_lahir }}" >
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ibu_tgl_lahir" value="{{ $data->ibu_tgl_lahir }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="ibu_pekerjaan" value="{{ $data->ibu_pekerjaan }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="ibu_alamat" value="{{ $data->ibu_alamat }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="ibu_kewarganegaraan" value="{{ $data->ibu_kewarganegaraan }}">
                        </div>
                    </div>
                     
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ayah</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="ayah_nik" value="{{ $data->ayah_nik }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="ayah_nama" value="{{ $data->ayah_nama }}">
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="ayah_tmpt_lahir" value="{{ $data->ayah_tmpt_lahir }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ayah_tgl_lahir" value="{{ $data->ayah_tgl_lahir }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="ayah_pekerjaan" value="{{ $data->ayah_pekerjaan }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="ayah_alamat" value="{{ $data->ayah_alamat }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Kewarganegaraan</label>
                            <input class="form-control" type="text" name="ayah_kewarganegaraan" value="{{ $data->ayah_kewarganegaraan }}">
                        </div>
                    </div>
                     
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Pelapor</h1>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK</label>
                            <input class="form-control" type="text" name="pelapor_nik" value="{{ $data->pelapor_nik }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="pelapor_nama" value="{{ $data->pelapor_nama }}">
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="pelapor_tmpt_lahir" value="{{ $data->pelapor_tmp_lahir }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="pelapor_tgl_lahir" value="{{ $data->pelapor_tgl_lahir }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Umur</label>
                            <input class="form-control" type="text" name="pelapor_umur" value="{{ $data->pelapor_umur }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Pekerjaan</label>
                            <input class="form-control" type="text" name="pelapor_pekerjaan" value="{{ $data->pelapor_kerja }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="pelapor_alamat" value="{{ $data->pelapor_alamat }}">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lapor</label>
                            <input class="form-control" type="date" name="tgl_lapor" value="{{ $data->tgl_lapor }}">
                        </div>
                    </div>
 

                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Saksi</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>saksi 1</h3>
                            <div class="form-group col-md-12">
                                <label for="inputState">NIK</label>
                                <input class="form-control" type="text" name="saksi1_nik" value="{{ $data->saksi1_nik }}">
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Nama Lengkap</label>
                                <input class="form-control" type="text" name="saksi1_nama" value="{{ $data->saksi1_nama }}">
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputState">Umur</label>
                                <input class="form-control" type="number" name="saksi1_umur" value="{{ $data->saksi1_umur }}" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Alamat</label>
                                <input class="form-control" type="text" name="saksi1_alamat" value="{{ $data->saksi1_alamat }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>saksi 2</h3>
                            <div class="form-group col-md-12">
                                <label for="inputState">NIK</label>
                                <input class="form-control" type="text" name="saksi2_nik" value="{{ $data->saksi2_nik }}" >
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Nama Lengkap</label>
                                <input class="form-control" type="text" name="saksi2_nama" value="{{ $data->saksi2_nama }}">
                            </div>  
                            <div class="form-group col-md-12">
                                <label for="inputState">Umur</label>
                                <input class="form-control" type="number" name="saksi2_umur" value="{{ $data->saksi2_umur }}">
                            </div> 
                            <div class="form-group col-md-12">
                                <label for="inputState">Alamat</label>
                                <input class="form-control" type="text" name="saksi2_alamat" value="{{ $data->saksi1_alamat}}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-left mt-4 mb-4">
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
  