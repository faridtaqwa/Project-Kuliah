@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Formulir Permohonan Pindah Datang WNI</h1>
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
                    <h1 class="h3 mb-0 text-gray-800">Data Daerah Asal</h1>
                    <div class="row">
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
                        <label for="inputState">Desa / Kelurahan</label>
                        <input class="form-control" type="text" name="desa" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Kecamatan</label>
                        <input class="form-control" type="text" name="kecamatan" >
                    </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Kab / Kota</label>
                        <input class="form-control" type="text" name="kabupaten" >
                    </div>         
                    <div class="form-group col-md-6">
                        <label for="inputState">Provinsi</label>
                        <input class="form-control" type="text" name="provinsi" >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Kodepos</label>
                        <input class="form-control" type="text" name="kodepos" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">NIK Pemohon</label>
                        <input class="form-control" type="text" name="nik_pemohon" >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tmpt_lahir" >
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" >
                    </div>
                    </div>

                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Daerah Tujuan</h1>
                    <div class="row">
                                            <div class="form-group col-md-6">
                        <label for="inputState">Status KK</label>
                        <select name="tujuan_kk" class="form-control">
                            <option selected>-- Pilih --</option>
                            <option value="Numpang">Numpang</option>
                            <option value="Membuat KK Baru">Membuat Kk Baru</option>
                            <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="tujuan_no_kk" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="tujuan_nama_kk" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Tanggal Kedatangan</label>
                        <input class="form-control" type="text" name="tgl_datang" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Alamat yang Dituju</label>
                        <input class="form-control" type="text" name="tujuan_alamat" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Desa / Kelurahan</label>
                        <input class="form-control" type="text" name="tujuan_desa" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Kecamatan</label>
                        <input class="form-control" type="text" name="tujuan_kecamatan" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Kabupaten</label>
                        <input class="form-control" type="text" name="tujuan_kabupaten" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Provinsi</label>
                        <input class="form-control" type="text" name="tujuan_provinsi" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Kodepos</label>
                        <input class="form-control" type="text" name="tujuan_kodepos" >
                    </div>
                    </div>
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Keluarga yang Pindah</h1>
                    <div class="form-group row">
                        <div class="row col-auto" style="flex: 1 1 1px;">
                            <div class="col-3">
                                <label>NIK</label>
                                <input type="text" class="form-control" name="data[nik][]" required>    
                            </div>
                            <div class="col-4">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="data[nama_kel][]" required>    
                            </div>
                            <div class="col-3">
                                <label>Masa Berlaku KTP</label>
                                <input type="text" class="form-control" name="data[masa][]">    
                            </div>
                            <div class="col-2">
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
                    <div class="text-left mt-4 mb-4">
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
                    .addClass("form-group row input-wrapwrap ")
                    .append([
                        $("<div>").addClass("row col-auto").css("flex",1)
                            .append([
                                $("<div>")
                                    .addClass("col-3")
                                    .append([
                                        $("<label>").html("NIK"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[nik][]"
                                        })    
                                    ]),
                                $("<div>")
                                    .addClass("col-3")
                                    .append([
                                        $("<label>").html("Nama"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[nama_kel][]"
                                        })    
                                    ]),
                                $("<div>")
                                    .addClass("col-3")
                                    .append([
                                        $("<label>").html("Masa Berlaku KTP"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[masa][]"
                                        })    
                                    ]),
                                $("<div>")
                                    .addClass("col-3")
                                    .append([
                                        $("<label>").html("SHDK"),
                                        $("<input>").attr({
                                            "type":"text",
                                            "class":"form-control",
                                            "name": "data[shdk][]"
                                        })    
                                    ]),                           
                            ]),
                            $("<div>").addClass(" col-auto")
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
  