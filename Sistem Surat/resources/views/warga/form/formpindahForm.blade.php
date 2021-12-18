@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Formulir Permohonan Pindah</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('warga.pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $kategori }}" name="kategori" >
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" required>
                    </div>    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Daerah Asal</h1>
                        <div class="row m-2">
                                <div class="form-group col-md-6">
                            <label for="inputState">Nomor Kartu Keluarga</label>
                            <input class="form-control" type="text" name="no_kk" required>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Kepala Keluarga</label>
                            <input class="form-control" type="text" name="nama_kk" required>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat</label>
                            <input class="form-control" type="text" name="alamat" required>
                        </div>     
                        <div class="form-group col-md-6">
                            <label for="inputState">Desa / Kelurahan</label>
                            <input class="form-control" type="text" name="desa" required>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Kecamatan</label>
                            <input class="form-control" type="text" name="kecamatan" required >
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="inputState">Kab / Kota</label>
                            <input class="form-control" type="text" name="kab" required >
                        </div>         
                        <div class="form-group col-md-6">
                            <label for="inputState">Provinsi</label>
                            <input class="form-control" type="text" name="provinsi" required>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Kodepos</label>
                            <input class="form-control" type="text" name="kodepos" required>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">NIK Pemohon</label>
                            <input class="form-control" type="text" name="nik_pemohon" required>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" required>
                        </div>  
                        <div class="form-group col-md-6">
                            <label for="inputState">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" required>
                        </div>
                    </div>
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Kepindahan</h1>
                    <div class="row m-2">
                            <div class="form-group col-md-6">
                            <label for="inputState">Alasan Pindah</label>
                            <select name="alasan_pindah" class="form-control" required>
                                <option selected>-- Pilih --</option>
                                <option value="Pekerjaan">Pekerjaan</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Keamanan">Keamanan</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Perumahan">Perumahan</option>
                                <option value="Keluarga">Keluarga</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Alamat Tujuan Pindah</label>
                            <input class="form-control" type="text" name="tujuan_alamat_pindah" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Desa / Kelurahan</label>
                            <input class="form-control" type="text" name="tujuan_desa" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Kecamatan</label>
                            <input class="form-control" type="text" name="tujuan_kecamatan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Kab / Kota</label>
                            <input class="form-control" type="text" name="tujuan_kab" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Provinsi</label>
                            <input class="form-control" type="text" name="tujuan_prov" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Kodepos</label>
                            <input class="form-control" type="text" name="tujuan_kodepos" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Jenis Kepindahan</label>
                            <select name="jenis_pindah" class="form-control" required>
                                <option selected>-- Pilih --</option>
                                <option value="Kep. Keluarga">Kep. Keluarga</option>
                                <option value="Kep. Keluarga dan Seluruh Anggota Keluarga">Kep. Keluarga dan Seluruh Anggota Keluarga</option>
                                <option value="Kep. Keluarga Sebagai Anggota Keluarga">Kep. Keluarga Sebagai Anggota Keluarga</option>
                                <option value="Anggota Keluarga">Anggota Keluarga</option>
                            </select>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputState">Status KK bagi yang tidak pindah</label>
                            <select name="status_kk" class="form-control" required>
                                <option selected>-- Pilih --</option>
                                <option value="Numpang KK">Numpang KK</option>
                                <option value="Membuat KK Baru">Membuat KK Baru</option>
                                <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Status KK bagi yang pindah</label>
                            <select name="status_no_kk_pindah" class="form-control" required>
                                <option selected>-- Pilih --</option>
                                <option value="Numpang KK">Numpang KK</option>
                                <option value="Membuat KK Baru">Membuat KK Baru</option>
                                <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                            </select>
                        </div>
                    </div>
                    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Keluarga yang Pindah</h1>
                    <div class="form-group row mr-5">
                        <div class="row col-auto" style="flex: 1 1 1px;">
                            <div class="col-md-3">
                                <label>NIK</label>
                                <input type="text" class="form-control" name="data[nik][]" required>    
                            </div>
                            <div class="col-md-4">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="data[nama_kel][]" required>    
                            </div>
                            <div class="col-md-3">
                                <label>Masa Berlaku KTP</label>
                                <input type="text" class="form-control" name="data[masa][]" required>    
                            </div>
                            <div class="col-md-2">
                                <label>SHDK</label>
                                <input type="text" class="form-control" name="data[shdk][]" required>    
                            </div>
                        </div>
                    </div>
                    <div id="data-wrap">
                        <div id="input-wrap">
                            <hr>
                        
                            @if(old('data'))
                                @foreach(old('data')['nama'] as $data)
                                <div class="form-group row">
                                    <div class="row col-auto" style="flex: 1 1 1px;">
                                        <div class="col-3">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" name="data[nik][]" value="{{ old('data')['nik'][$loop->index] }}">    
                                        </div>
                                        <div class="col-4">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="data[nama][]" value="{{ old('data')['nama'][$loop->index] }}">    
                                        </div>
                                        <div class="col-3">
                                            <label>Masa Berlaku KTP</label>
                                            <input type="text" class="form-control" name="data[masa][]" value="{{ old('data')['masa'][$loop->index] }}">    
                                        </div>
                                        <div class="col-2">
                                            <label>SHDK</label>
                                            <input type="text" class="form-control" name="data[shdk][]" value="{{ old('data')['shdk'][$loop->index] }}">    
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-gorup row">
                                            <label style="opacity: 0;">hapus</label>
                                            <button class="form-control btn btn-danger">x</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            @endif
                        </div>
                        <hr>
                    <div id="tambah" class="m-2">
                            <button class="btn btn-success" type="button"> tambah</button>
                    </div>

                    </div>
                    <div class="text-center mt-4 mb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

<script>
        $(document).ready(function(){
            let dataWrap= $("#input-wrap");
            $("#tambah button").click(function(){
                let a = $("<div>")
                    .addClass("form-group row input-wrapwrap m-1 ")
                    .append([
                        $("<div>").addClass("row col-auto").css("flex",1)
                            .append([
                                $("<div>")
                                    .addClass("col-md-3")
                                    .append([
                                        $("<label>").html("NIK"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[nik][]"
                                        })    
                                    ]),
                                $("<div>")
                                    .addClass("col-md-4")
                                    .append([
                                        $("<label>").html("Nama"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[nama_kel][]"
                                        })    
                                    ]),
                                $("<div>")
                                    .addClass("col-md-3")
                                    .append([
                                        $("<label>").html("Masa Berlaku KTP"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[masa][]"
                                        })    
                                    ]),
                                $("<div>")
                                    .addClass("col-md-2")
                                    .append([
                                        $("<label>").html("SHDK"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[shdk][]"
                                        })    
                                    ]),                           
                            ]),
                            $("<div>").addClass(" col-md-auto")
                            .append([
                                $("<div>")
                                    .addClass("form-gorup row")
                                    .append([
                                        $("<label>").html("hapus").css("opacity",0),
                                        $("<button>").attr({
                                            "class":"form-control btn btn-danger hapus",
                                        }).html("x")
                                    ])

                            ])
                    ])
                dataWrap.append(a);
            })
            
            $('#input-wrap').on('click','.hapus',function(){
                $(this).closest('.input-wrapwrap').remove()
            })
        });
    </script>
@endsection
  