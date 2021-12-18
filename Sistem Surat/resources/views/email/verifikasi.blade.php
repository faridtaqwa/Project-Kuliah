@component('mail::message')
Kepada {{ $pengajuan->nama_pemesan }}
<br>
<p style="text-align:center;" class="mb-0" >
<img class="aligncenter " style="height: 300px ; width:300px; border:none" src=" {{asset('img/n.png')}}"  alt="">

</p>
Pengajuan Surat <b>{{ $pengajuan->kategori->nama }}</b> Anda Telah berhasil Diverifikasi oleh Admin.

{{--  @component('mail::button', ['url' => ''])
Login Warga
@endcomponent  --}}

Terimaksih,<br>
@endcomponent
