{{-- {{--  <!DOCTYPE html> --}}
<html lang="en">
<head>
    <title>Surat Keterangan Klahiran</title>
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
        {{--  <table border="" align="center " style="margin-top: -40px ;margin_left:50px; margin-right:50px;margin-bottom:10px" >
            <tr style="padding-bottom: 0px">
                <td style="margin-right: 20px"> <img src="https://1.bp.blogspot.com/-9QN4hDujIgY/VzRwd4x7tBI/AAAAAAAAA0k/alfSqysJjpwf0qexK4WrbXBpOAk9VUcSgCLcB/s1600/logo%2Bslmn34.jpg" alt="" width="100" height="120"></td>
                <td style="margin-top: 0;margin-bottom:0px; margin-left:30px;padding-left:20px;padding-bottom:0px:">
                    <table class="kop" align="center" style="margin-bottom: 0">
                        <tr>
                            <td> <font size="2">PEMERINTAH KABUPATEN SLEMAN</font> </td>

                        </tr>
                    </table>
                    <table align="center" class="kop" style="margin-top:-5;margin-bottom:0">
                        <tr>
                            <td> <font size="3" >KAPANEWON NGEMPLAK</font> </td>
                            
                        </tr>
                    </table>
                    <table class="kop" align="center" style="margin-top:-5px ">
                        <tr>
                            <td> <font size="4"> <b>PEMERINTAH KALURAHAN UMBULMARTANI</b> </font></td>
                        </tr>
                    </table>
                    <table align="center" style="margin-top: -5px">
                        <tr>
                            <td > <img src="https://1.bp.blogspot.com/-f06HvCEwnG0/X-FYFGSQa8I/AAAAAAAAC-s/DUfxkROCI64Reciepf_qgDM3hcK6dDWOwCLcBGAsYHQ/s459/image004.gif" alt="" width="300" height="30"></td>
                        </tr>
                    </table>
                    <table align="center" style="margin-bottom: 0; margin-top:-5px">
                        <tr>
                            <td> <font size="1" >Grogolan, Umbulmartani, Ngemplak, Sleman, 55584</font> </td>
                            
                        </tr>
                                          
                    </table>
                    <table align="center" style="margin-top: -5px;margon-bottom:0">
                        <tr>
                            <td> <font size="1" > Email : desaumbulmartani@slemankab.go.ig</font> </td>
                        </tr>
                    </table>
                    <table align="center" style="margin-top: -5px;margon-bottom:0">
                        <tr>
                            <td> <font size="1" >Telepon (0274) 898 091</font> </td>                       
                        </tr>
                    </table>
                    
                </td>
            </tr> 
        </table>

        <hr style="border: solid 1px;margin-top: -8;">
        <hr style="border: solid 2px;margin-top: -5px;">  --}}

<table align="center" style="margin-top:20;padding:0;" border="">
    <tr style="margin: 0;padding:0">
        <td style="margin: 0;padding:0" align="center"><u><b>SURAT KETERANGAN KELAHIRAN</b> </u></td>
    </tr>
    <tr style="margin: 0;padding:0">
        <td style="margin: 0;padding:0; font-size:10px"><center>{{  $pengajuan->nomer_surat  }}  </center></td>
    </tr>
</table>

<table style="margin-left: 2cm; font-size:11px;margin-top:10px" border="">
    <tr>
        <td>1. Nomor Kepala Keluarga</td>
        <td>: {{ $pengajuan->no_kk }}</td>
    </tr>
    <tr>
        <td>2. Nama Kepala Keluarga</td>
        <td>: {{ $pengajuan->nama_kk }}</td>
    </tr>
</table>
<table width="100%" style="font-size:11px; border: 1px solid black; padding-bottom:0;">
<tr style="margin: 0">
    <td style="padding: 0;margin:0;">
        <b>BAYI/ANAK</b>
    </td>
</tr>
<tr>
    <td>
        <table style="margin-left: 2cm; margin-top:-15; padding-top:0;">
            <tr style="">
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
                <td>4. Tempat Dilahirkan</td>
                <td>: {{ $pengajuan->tmpt_lahiran }} </td>
            </tr>
            <tr>
                <td>5. Tempat Kelahiran</td>
                <td>: {{ $pengajuan->tmpt_lahir}}</td>
            </tr>
            <tr>
                <td>6. Hari/Tgl,Bln</td>
                <td>: {{ $pengajuan->hari_lahir }} /  {{ \Carbon\Carbon::parse($pengajuan->tgl_lahir )->format('d-m-Y')}} </td>
            </tr>
            <tr>
                <td>7. Waktu/Jam Kelahiran</td>
                <td>: {{ $pengajuan->jam_lahir }}</td>
            </tr>
            <tr>
                <td>8. Jenis Kelahiran</td>
                <td>: {{ $pengajuan->jenis_kelahiran }}</td>
            </tr>
            <tr>
                <td>9.Kelahiran ke </td>
                <td>: {{ $pengajuan->kelahiran_ke }}</td>
            </tr>
            <tr>
                <td>10. Penolong Kelahiran</td>
                <td>: {{ $pengajuan->penolong_lahir }}</td>
            </tr>
            <tr>
                <td>11. Berat Bayi</td>
                <td>: {{ $pengajuan->berat }}Kg</td>
            </tr>
            <tr>
                <td>12. Panjang Bayi</td>
                <td>: {{ $pengajuan->panjang}}Cm</td>
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
    <tr style="padding: 0">
        <td style="padding: 0">
            <table style="margin-left: 2cm;margin-top:0;margin-top:-15px">
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
                    <td>: {{ $pengajuan->ibu_kewarganegaraan }}</td>
                </tr>
                <tr>
                    <td>7 .Tanggal Perkawinan</td>
                    <td>: {{ $pengajuan->ibu_tgl_kawin }}</td>
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
            <table style="margin-left: 2cm; margin-top:-15px">
                <tr>
                    <td>1. NIK</td>
                    <td>: {{ $pengajuan->ayah_nik }} </td>
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
            <table style="margin-left: 2cm;margin-top:-15px">
                <tr>
                    <td>1. NIK</td>
                    <td>: {{ $pengajuan->pelapor_nik }} </td>
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
                    <td>: {{ $pengajuan->pelapor_alamat }}</td>
                </tr>
                <tr>
                    <td>7. Tanggal Lapor</td>
                    <td>: {{ $pengajuan->tgl_lapor }}</td>
                </tr>
            </table>
        </td>
    </tr> 
</table>
<table width="100%" style="font-size:11px; border: 1px solid black;padding:0%">
    <tr style="padding: 0;margin-top:-15px">
        <td>
            <b>SAKSI I</b>
        </td>
            <td> SAKSI II</td>
    </tr>
    <tr>
        <td>
            <table style="margin-left: 2cm;margin-top:-15px">
                <tr>
                    <td>1. NIK</td>
                    <td>: {{ $pengajuan->saksi_nik }} </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->saksi_nama }}</td>
                </tr>
                <tr>
                    <td>3. Umur</td>
                    <td>: {{ $pengajuan->saksi_umur }}</td>
                </tr>
                <tr>
                    <td>4. Alamat</td>
                    <td>: {{ $pengajuan->saksi_alamat }} </td>
                </tr>
            </table>
        </td>
         <td>
            <table style="margin-left: 1.5cm;margin-top:-15px">
                <tr>
                    <td>1. NIK</td>
                    <td>: {{ $pengajuan->saksi_2_nik }} </td>
                </tr>
                <tr>
                    <td>2. Nama</td>
                    <td>: {{ $pengajuan->saksi_2_nama }}</td>
                </tr>
                <tr>
                    <td>3. Umur</td>
                    <td>: {{ $pengajuan->saksi_2_umur }}</td>
                </tr>
                <tr>
                    <td>4. Alamat</td>
                    <td>: {{ $pengajuan->saksi_2_alamat }} </td>
                </tr>
            </table>
        </td>
    </tr> 
</table>

    <table width="100%" style="font-size: 11px" align="left">
        <tr>
            <td> <center>Mengetahui</center></td>
            <td style=""> <center> Umbulmartani,{{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }} </center></td>
        </tr>
        <tr>
            <td> <center>  a.n Kepala Desa Umbulmartani</center></td>
            <td > <center> pelapor</center> </td>
        </tr>
        <tr> <td height="45px" > </td></tr>
        <tr style="">
            <td> <center>Sugiyo</center> </td>
           
            <td> <center> {{ $pengajuan->pelapor_nama }}</center></td>
        </tr>
        
    </table>
    

{{--  
    <table align="left" border="" style="font-size:11px; ;margin-top:0px;padding-top:0px; ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td> <center> Mengetahui</center> </td>
    </tr>
    <tr style="">
        <td> <font style="size: 10px">a.n KEPALA DESA UMBULMARTANI</font> </td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>sUGIO</b></td>
    </tr>
   <table align="right" border="" style="margin_left:450px ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Umbulmartani, {{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }} </td>
    </tr>
    <tr align="center">
        <td>pelapor</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>Rahmat edi</b></td>
    </tr>

</table>  --}}


    
</body>
</html>
