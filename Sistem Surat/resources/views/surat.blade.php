{{-- {{--  <!DOCTYPE html> --}}
<html lang="en">
<head>
    <title>Surat Keterangan Kematian</title>
</head>
<table style="font-size:11px; margin-top: 10px; border: 1px solid black;">
    <tr>
        <td style="margin-top: 0">
           <b>KODE . F-2.01</b> 
        </td>
</table>
<table border="" width="50%" style="font-size:11px; margin-top: 10px">
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
        <td style="margin-top: 0">
            <b>: SLEMAN</b>
         </td>
    </tr>
</table>

<br>
<br>
<table align="center" style="" border="">
    <tr>
        <td align="center"><b>SURAT KETERANGAN KEMATIAN</b><hr></td>
    </tr>
    <tr>
        <td><center>Nomer Surat  {{ $pengajuan->nomer_surat }}</center></td>
    </tr>
</table>
<br>
<table style="margin-left: 1.5cm; font-size:11px;" border="">
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
        <table style="margin-left: 1.5cm;">
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
                <td>:{{ $pengajuan->tgl_lahir }} / {{ $pengajuan->umur }} </td>
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
                <td>: {{ $pengajuan->meninggal_tgl }}</td>
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
            <table style="margin-left: 1.5cm;">
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
                    <td>: {{ $pengajuan->ibu_tmpt_lahir }}</td>
                </tr>
                <tr>
                    <td>4. Pekerjaan</td>
                    <td>: {{ $pengajuan->ibu_pekerjaan }} </td>
                </tr>
                <tr>
                    <td>5. Alamat</td>
                    <td>: {{ $pengajuan->alamat }}</td>
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
            <table style="margin-left: 1.5cm;">
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
                    <td>: {{ $pengajuan->ayah_tmpt_lahir }}</td>
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
            <table style="margin-left: 1.5cm;">
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
                    <td>: {{ $pengajuan->pelapor_umut }}</td>
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
    </tr>
    <tr>
        <td>
            <table style="margin-left: 1.5cm;">
                <tr>
                    <td>1. NIK</td>
                    <td>: </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->nama }}</td>
                </tr>
                <tr>
                    <td>3. Jenis Kelamin</td>
                    <td>: </td>
                </tr>
                <tr>
                    <td>4. Tempat Kelahiran</td>
                    <td>: </td>
                </tr>
                <tr>
                    <td>5. Tempat Lahir</td>
                    <td>: </td>
                </tr>
            </table>
        </td>
    </tr> 
    </table>

    

<table  style="margin-top: {{ $kategori->margin_bawah }}cm" align="left" border="">
    <tr><td height="100"></td></tr>
    <tr>
        <td>{!! $kategori->paragraf_akhir !!}</td>
    </tr>
</table>

<table align="right" border="">
    <tr><td height="70"></td></tr>
    <tr>
        <td>Yogyakarta, {{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }}</td>
    </tr>
    <tr>
        <td>{{ $kategori->jabatan_ttd }}</td>
    </tr>
    <tr><td height="50"></td></tr>
    <tr>
        <td><b>{{ $kategori->nama_ttd }}</b></td>
    </tr>
    <tr>
        <td><b>{{ $kategori->nomor_pegawai_ttd }}</b></td>
    </tr>
</table>
<body>
    
</body>
</html>
