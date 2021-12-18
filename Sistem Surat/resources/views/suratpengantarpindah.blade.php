<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
   
    body{
    font-family: Arial, Helvetica, sans-serif;
    }
    </style>
    
</head>
<body>

     
        {{--  <table border="" align="center " style="margin-top: -20px ;margin_left:50px; margin-right:50px; padding-left:40px" >
            <tr style="padding-bottom: 0px">
                <td style="margin-right: 20px"> <img src="https://1.bp.blogspot.com/-9QN4hDujIgY/VzRwd4x7tBI/AAAAAAAAA0k/alfSqysJjpwf0qexK4WrbXBpOAk9VUcSgCLcB/s320/logo%2Bslmn34.jpg" alt="" width="90" height="90">
                </td>
                <td style="margin-top: 0;margin-bottom:0px; margin-left:50px;padding-left:20px;padding-bottom:0px:">
                    <center>
                        <font  align="center " size="4" style="font-weight: bold"></font>
           
                        <font size="3">PEMERINTAH KABUPATEN SLEMAN</font> <br>

                        <font size="3">KECAMATAN NGEMPLAK</font> <br>

                        <font size="4">PEMERINTAH DESA UMBULMARTANI</font><br>
                        <font size="2">Grogolan, Umbulmartani, Ngemplak, Sleman, DIY</font>
                    </center>
                </td>
            </tr>
            <tr>
            </tr>
        
        </table>
        <hr style="border: solid 1px;margin-top: 0;">  --}}
                <table border="" align="center " style="margin-top: -20px ;margin_left:50px; margin-right:50px;margin-bottom:10px" >
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
        <hr style="border: solid 2px;margin-top: -5px;">


        <table align="center" style="margin-top: 30px">
            <tr>
                <td>
                    <center>
                        <b>SURAT PENGANTAR PINDAH </b>    
                    </center>
                </td>
            </tr>
            <tr><td><center><b>ANTAR KABUPATEN / KOTA ATAU ANTAR PROVINSI</b></center></td></tr>
            <tr><td><center>No.{{ $pengajuan->nomer_surat }}</center></td></tr>
        </table>
    
    <table class="isi" style="margin-top:20px">
            <tr>
                <td> Yang bertanda tangan di bawah ini, menerangkan Permohonan Pindah Penduduk WNI dengan data sebagai berikut</td>
            </tr>
        </table>
    <table class="isi" >
        <tr>
            <td style="width: 220px">1.NIK</td>
            <td id="data">: {{ $pengajuan->nik }}</td>
        </tr>
        <tr>
            <td style="">2.Nama Lengkap</td>
            <td colspan="" id="data">: {{ $pengajuan->nama }}</td>
        </tr>
         <tr>
            <td style="" >3.Tempat Tanggal Lahir</td>
            <td id="data">: {{ $pengajuan->tempat_lahir }},  {{ tgl_indo(Carbon\Carbon::parse($pengajuan->tgl_lahir)->format('Y-m-d'))}}  </td>
            
        </tr>
         <tr>
            <td>4.Nomor Kartu Keluarga</td>
            <td>: {{ $pengajuan->no_kk }}</td>
        </tr>
        <tr>
            <td>5.Nama Kepala Keluarga</td>
            <td>: {{ $pengajuan->nama_kk }}</td>
        </tr>
        <tr>
            <td>6.Alamat Sekarang</td>
            <td>: {{ $pengajuan->alamat }}</td>
        </tr>
    </table>
    <table class="isi" style="margin-left: 233px">
        <tr>
            <td>Desa/Kelurahan</td>
            <td>: {{ $pengajuan->desa }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>: {{ $pengajuan->kecamatan }}</td>

        </tr>
        
    </table>
     <table class="isi">
        <tr>
            <td style="width: 220px" >7. Alamat tujuan Pindah</td>
            <td id="data">: {{ $pengajuan->tujuan_alamat }}</td>
        </tr>
    </table>
       <table class="isi" style="margin-left: 233px">
        <tr>
            <td>Desa/Kelurahan</td>
            <td>: {{ $pengajuan->tujuan_desa }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>: {{ $pengajuan->tujuan_kecamatan }}</td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>: {{ $pengajuan->tujuan_kabupaten }}</td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>: {{ $pengajuan->tujuan_provinsi }}</td>
        </tr>

        
    </table>
    
    <table class="isi">
        <tr>
            <td style="width: 150px" >8.Jumlah keluarga yang pindah</td>
            <td id="data">:{{ $pengajuan->jumlah_pindah }}</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 20px">
        <tr>
            <td  >Adapun Permohonan Pindah Penduduk WNI yang bersangkutan sebagaimana terlampir.</td>
        </tr>
    </table>
    <table class="isi" align="center" style="margi-top:10px">
        <tr>
            <td style >Demikian Surat Pengantar Pindah ini dibuat agar digunakan sebagaimana mestinya</td>
        </tr>
    </table>

   
    <table class="isi" align="left" border="" style=" margin-top:30px;padding-top:0px; ">
    <tr><td height=""></td></tr>
    <tr align="CENTER" style="">
        <td> Mengetahui</td>
    </tr>
    <tr style="">
        <td>CAMAT NGEMPLAK</td>
    </tr>
    <tr ><td height="50"></td></tr>
    
   <table class="isi" align="right" border="" style="margin_left:400px ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Umbulmartani, {{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }}</td>
    </tr>
    <tr align="">
        <td>a.n KEPALA DESA UMBULMARTANI</td>
    </tr>
    <tr ><td height="">u.b. Sekretaris Desa</td></tr>
    <tr><td>Kepala Urusan Tata Usaha Dan Umum</td></tr>
    <tr >
        <td height="50px"></td>
    </tr>
    <tr align="center">
        <td>Sugiyo</td>
    </tr>

</table>
    
   
</body>
</html>