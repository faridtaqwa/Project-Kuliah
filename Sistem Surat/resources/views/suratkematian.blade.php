{{-- {{--  <!DOCTYPE html> --}}
<html lang="en">
<head>
    <title>Surat Keterangan Kematian</title>
</head>
<body>
<table style="font-size:11px; border: 1px solid black;">
    <tr>
        <td style="margin-top: 0">
           <b>KODE . F-2.01</b> 
        </td>
</table>
<table border="" width="50%" style="font-size:11px; margin-top: 0;margin-bottom: 0;">
    <tr>
        <td style="margin-top: 0">
           Pemerintah Desa/Kelurahan 
        </td>
        <td style="margin-top: 0">
            <b>: UMBULMARTANI</b>
         </td>
    </tr>
    <tr>
        <td style="margin-top: 0">
           Kecamatan
        </td>
        <td style="margin-top: 0">
            <b>: NGEMPLAK</b>
         </td>
    </tr>
    <tr>
        <td style="margin-top: 0">
           Kabupaten
        </td>
        <td style="margin-top: 0;margin-bottom:0">
            <b>: SLEMAN</b>
         </td>
    </tr>
</table>


<table align="center" style="margin-top:0;padding:0;" border="">
    <tr style="margin: 0;padding:0">
        <td style="margin: 0;padding:0" align="center"><u><b>SURAT KETERANGAN KEMATIAN</b> </u></td>
    </tr>
    <tr style="margin: 0;padding:0">
        <td style="margin: 0;padding:0; font-size:10px;"><center>{{ $pengajuan->nomer_surat }}  </center></td>
    </tr>
</table>

<table style="margin-left: 2cm; font-size:11px;" border="">
    <tr>
        <td>1. Nama Kepala Keluarga</td>
        <td>: {{ $pengajuan->no_kk }}</td>
    </tr>
    <tr>
        <td>2. Nomor Kartu Keluarga</td>
        <td>: {{ $pengajuan->nama_kk }}</td>
    </tr>
</table>
<table width="100%" style="font-size:11px; border: 1px solid black;">
<tr>
    <td>
        <b>JENAZAH</b>
    </td>
</tr>
<tr>
    <td>
        <table style="margin-left: 2cm;margin-top:-15; padding-top:0;">
            <tr>
                <td>1. NIK</td>
                <td>: {{ $pengajuan->nik }}</td>
            </tr>
            <tr>
                <td>2. Nama Lengkap</td>
                <td>: {{ $pengajuan->nama }}</td>
            </tr>
            <tr>
                <td>3. Jenis Kelamin</td>
                <td>: {{$pengajuan->jk  }} </td>
            </tr>
            <tr>
                <td>4. Tempat Kelahiran</td>
                <td>:{{ $pengajuan->tmpt_lahir }} </td>
            </tr>
            <tr>
                <td>5. Tanggal Lahir/Umur</td>
                <td>:{{ $pengajuan->tgl_lahir }} / {{ $pengajuan->umur}} Tahun</td>
            </tr>
            <tr>
                <td>6. Agama</td>
                <td>:{{ $pengajuan->agama }}</td>
            </tr>
            <tr>
                <td>7. Pekerjaan</td>
                <td>: {{ $pengajuan->pekerjaan }}</td>
            </tr>
            <tr>
                <td>8. Alamat</td>
                <td>: {{ $pengajuan->alamat }}</td>
            </tr>
            <tr>
                <td>9. Anak ke</td>
                <td>: {{ $pengajuan->anak_ke }}</td>
            </tr>
            <tr>
                <td>10. Meninggal Hari/Tanggal</td>
                <td>:  {{ $pengajuan->hari_meninggal }} / {{ \Carbon\Carbon::parse($pengajuan->meninggal_tgl)->format('d-m-Y')}}</td>
            </tr>
            <tr>
                <td>11. Tempat Meninggal</td>
                <td>: {{ $pengajuan->tmpt_meninggal }}</td>
            </tr>
            <tr>
                <td>12. jam</td>
                <td>: {{ $pengajuan->jam_meninggal }}</td>
            </tr>
            <tr>
                <td>13. Sebab</td>
                <td>: {{ $pengajuan->sebab }}</td>
            </tr>
            <tr>
                <td>14. Tempat Kematian</td>
                <td>: {{ $pengajuan->tmpt_kematian }}</td>
            </tr>
            <tr>
                <td>15. Yang Menerangkan</td>
                <td>: {{ $pengajuan->menerangkan }}</td>
            </tr>
        </table>
    </td>
</tr> 
</table>
<table width="100%" style="font-size:11px; border: 1px solid black;">
    <tr>
        <td>
            <b>IBU</b>
        </td>
    </tr>
    <tr>
        <td>
            <table style="margin-left: 2cm;margin-top:-15; padding-top:0;">
                <tr>
                    <td>1. NIK</td>
                    <td>: {{$pengajuan->ibu_nik  }}</td>
                </tr>
                <tr>
                    <td>2. Nama Lengkap</td>
                    <td>: {{ $pengajuan->ibu_nama }}</td>
                </tr>
                <tr>
                    <td>3. Tempat/Tanggal Lahir</td>
                    <td>: {{ $pengajuan->ibu_tmpt_lahir }} / {{ $pengajuan->ibu_tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>4. Pekerjaan</td>
                    <td>: {{ $pengajuan->ibu_pekerjaan }} </td>
                </tr>
                <tr>
                    <td>5. Alamat</td>
                    <td>: {{ $pengajuan->ibu_alamat }}</td>
                </tr>
                <tr>
                    <td>6 .Kewarganegaraan</td>
                    <td>:{{ $pengajuan->ibu_kewarganegaraan }}</td>
                </tr>
            </table>
        </td>
    </tr> 
</table>
<table width="100%" style="font-size:11px; border: 1px solid black;">
    <tr>
        <td>
            <b>AYAH</b>
        </td>
    </tr>
    <tr>
        <td>
            <table style="margin-left: 2cm;margin-top:-15; padding-top:0;">
                <tr>
                    <td>1. NIK</td>
                    <td>:{{ $pengajuan->ayah_nik }} </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->ayah_nama}}</td>
                </tr>
                <tr>
                    <td>3. Tempat/Tanggal Lahir</td>
                    <td>: {{ $pengajuan->ayah_tmpt_lahir }}/{{ $pengajuan->ayah_tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>4. Pkerjaan</td>
                    <td>: {{ $pengajuan->ayah_pekerjaan }}</td>
                </tr>
                <tr>
                    <td>5. Alamat</td>
                    <td>: {{ $pengajuan->ayah_alamat }}</td>
                </tr>
                <tr>
                    <td>6 .Kewarganegaraan</td>
                    <td>: {{ $pengajuan->ayah_kewarganegaraan }}</td>
                </tr>
            </table>
        </td>
    </tr> 
</table>
<table width="100%" style="font-size:11px; border: 1px solid black;">
    <tr>
        <td>
            <b>PELAPOR</b>
        </td>
    </tr>
    <tr>
        <td>
            <table style="margin-left: 2cm;margin-top:-15; padding-top:0;">
                <tr>
                    <td>1. NIK</td>
                    <td>:{{ $pengajuan->pelapor_nik }} </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->pelapor_nama }}</td>
                </tr>
                <tr>
                    <td>3. Tempat/Tanggal Lahir</td>
                    <td>: {{ $pengajuan->pelapor_tmp_lahir }} /{{ $pengajuan->pelapor_tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>4. Umur</td>
                    <td>: {{ $pengajuan->pelapor_umur }}</td>
                </tr>
                <tr>
                    <td>5. Pekerjaan</td>
                    <td>: {{ $pengajuan->pelapor_kerja }}</td>
                </tr>
                <tr>
                    <td>6. Alamat</td>
                    <td>:{{ $pengajuan->pelapor_alamat }}</td>
                </tr>
                <tr>
                    <td>7. Tanggal Lapor</td>
                    <td>:{{ $pengajuan->tgl_lapor }}</td>
                </tr>
                <tr>
                    <td>8. Tanda Tangan</td>
                    <td>:</td>
                </tr>
            </table>
        </td>
    </tr> 
</table>
<table width="100%" style="font-size:11px; border: 1px solid black;">
    <tr>
        <td>
            <b>SAKSI I</b>
        </td>
            <td> SAKSI II</td>
    </tr>
    <tr>
        <td>
            <table style="margin-left: 2cm;margin-top:-15; padding-top:0;">
                <tr>
                    <td>1. NIK</td>
                    <td>:{{ $pengajuan->saksi1_nik }} </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->saksi1_nama }}</td>
                </tr>
                <tr>
                    <td>3. Umur</td>
                    <td>: {{ $pengajuan->saksi1_umur }}</td>
                </tr>
                <tr>
                    <td>4. Alamat</td>
                    <td>:{{ $pengajuan->saksi1_alamat }} </td>
                </tr>
            </table>
        </td>
         <td>
            <table style="margin-left: 2cm;margin-top:-15; padding-top:0;">
                <tr>
                    <td>1. NIK</td>
                    <td>:{{ $pengajuan->saksi2_nik }} </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->saksi2_nama }}</td>
                </tr>
                <tr>
                    <td>3. Umur</td>
                    <td>: {{ $pengajuan->saksi2_umur }}</td>
                </tr>
                <tr>
                    <td>4. Alamat</td>
                    <td>:{{ $pengajuan->saksi2_alamat }} </td>
                </tr>
            </table>
        </td>
    </tr> 
    </table>

    


    


    <table  align="right" style="font-size: 11px; align:right" >
        <tr>
            <td style=""> umbulmartani, {{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }} </td>
        </tr>
        <tr>
            <td> a.n Kepala Desa Umbulmartani</td>
        </tr>
        <tr >
            <td height="45px" > </td>
        </tr>
        <tr style="align:center;margrin-bottom:200px" >
           
            <td> <center>Sugiyo</center></td>
        </tr>
        
    </table>

    
</body>
</html>
