
@foreach(json_decode($pesanan->kategori->data_template,true)['nama'] as $data)
@php
    $data=json_decode($pesanan->kategori->data_template,true);
    $tess= $loop->index;         
    $data_pesanan= json_decode($pesanan->data,true);                   
    @endphp

    @if($data['type'][$loop->index]=="string")
    <div class="form-group col-md-6">
                <label for="inputEmail4">{{ str_replace('_',' ',$data['nama'][$tess])  }}</label>
                <input type="text" name="{{ $data['nama'][$tess] }}" class="form-control" id="inputEmail4" value="{{ $data_pesanan[$data['nama'][$tess]]  }}">
    </div>
    @elseif($data['type'][$loop->index]=="date")
    <div class="form-group col-md-6">
                <label for="date">{{ str_replace('_',' ',$data['nama'][$tess])  }}</label>
                <input type="date" name="{{ $data['nama'][$tess] }}" class="form-control" id="date" value="{{ $data_pesanan[$data['nama'][$tess]]  }}">
    </div>
    @elseif($data['type'][$loop->index]=='numeric')
    
    <div class="form-group col-md-6">
                <label for="date">{{ str_replace('_',' ',$data['nama'][$tess]) }}</label>
                <input type="number" name="{{ $data['nama'][$tess] }}" class="form-control" id="date" value="{{ $data_pesanan[$data['nama'][$tess]]  }}">
    </div>
    @elseif($data['type'][$loop->index]=='numeric')
    
    <div class="form-group col-md-6">
                <select name="" id="" class="form-control">
                            <option selected>Choose..</option>
                            <option value="1">1.Numpang KK</option>
                            <option value="2">2.Membuat KK baru</option>
                            <option value="3">3.Nomor KK Tetap</option>
                            <option>Data Kategori Belum Ada !!!</option>
                </select>
                <label for="date">{{ str_replace('_',' ',$data['nama'][$tess]) }}</label>
                <input type="number" name="{{ $data['nama'][$tess] }}" class="form-control" id="date" value="{{ $data_pesanan[$data['nama'][$tess]]  }}">
    </div>
    @endif
        
    

@endforeach
