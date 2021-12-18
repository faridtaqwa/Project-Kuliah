@component('mail::message')
Kepada {{ $pengajuan->nama_pemesan }}
<p style="text-align:center;" class="mb-0" >
    <img class="aligncenter " style="height: 300px ; width:300px; border:none" src=" {{asset('img/n.png')}}"  alt="">

</p>

Pengajuan  <b>{{ $pengajuan->kategori->nama }}</b>  Anda <B> DITOLAK.</B>
dengan alasan <b>{{ $pengajuan->pesanan->alasan_tolak }}</b> 
{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

Terimakasih,<br>
Desa Umbulmartani
@endcomponent
