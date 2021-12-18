@component('mail::message')
Kepada <b>{{ $pengajuan->nama_pemesan }}</b>
<br>
<p style="text-align:center;" class="mb-0" >
 <img class="aligncenter " style="height: 300px ; width:300px; border:none" src=" {{asset('img/n.png')}}"  alt="">

</p>
Pengajuan Surat <b>{{ $pengajuan->kategori->nama }}</b> Anda Telah Jadi Silahkan Di Ambil Di Kelurahan.
<br>
 
{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

Terimaksih,<br>
Desa Umbulmartani
@endcomponent
