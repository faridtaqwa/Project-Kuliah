<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body{font-size: 10px;
            margin-left: 10px;
            margin-right: 10px;
        };
        .kop{margin-right: 10px};
        table.saksi{
            width: 50%;
        };
        
    </style>
  </head>
  <body>
      
    {{-- kop surat --}}
         <table>
            <tr>
                <td>
                    <ul style="list-style: none">
                        <li>Pemerintah Desa/Kelurahan</li>
                        <li>Kecamatan</li>
                        <li>Kabupaten</li>
                    </ul>
                </td> 
                <td>
                    <ul style="list-style: none">
                        <li>:UMBULMARTANI</li>
                        <li>:Ngemplak</li>
                        <li>:Sleman</li>
                    </ul>
                </td>
            </tr>
         </table>
         {{-- namasurat --}}
        <table align="center">
            <tr><td> <b><u>SURAT KEHILANGAN KELAHIRAN</u></b> </td>
            </tr>    
        </table>
        <table align="center">
            <tr><td>NO:472.11/220/p/x/2020</td>
            </tr>    
        </table>
         
        {{-- nmoer nama kk --}}
        <table >
            <tr>
                <td>
                    <ol >
                        <li>Nomer Kartu Keluarga</li>
                        <li>Nama Kepala Keluarga</li>
                    </ol>
                </td> 
                <td>
                    <ul style="list-style: none">
                        <li>:134878346384636467</li>
                        <li>:DOkter sumarlan</li>
                    </ul>
                </td>
            </tr>
         </table>

           
        
        <table class="table table-bordered" style="font-size: 10px; margin-bottom:0px;padding-bottom:0px;">
        
            <tbody class="tabel" style="padding-top: 0px;padding-bottom: 0px; width:30%">
                <tr style="padding-top: 0px;padding-bottom: 0px; width:30%">
                    <td  style="padding-top: 0px;padding-bottom: 0px; width:30%">
                        <p style="margin-bottom: 0px"><b>BAYI</b></p>
                        <ol>
                            <li>NIK                     :</li>
                            <li>Nama Lengkap            :</li>
                            <li>Jenis Kelamin           :</li>
                            <li>Tempat Dilahirkan       :</li>
                            <li>Tempat Kelahiran                     :</li>
                            <li>Hari/tgl,bln,tahun            :</li>
                            <li>Jenis Kelahiran           :</li>
                            <li>Kelahiran ke       :</li>
                            <li>Penolong kelahiran            :</li>
                            <li>Berat bayi            :</li>
                            <li>Panjang bayi           :</li>
                        </ol>
                    </td>
                    <td style="padding-top: 0px">
                        <ul style="list-style: none">
                        <p style="margin-bottom: 0px; font" aria-disabled="true"><b>BAYI</b></p>
                            <li>:MAuza hanif ibrahim lala</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                        </ul>
                    </td>                    
                </tr>
            </tbody>
        {{--  ibu  --}}
        
        <tbody class="tabel " >

            <tr class="tabe " >
                <td  style="padding-top: 0px;padding-bottom: 0px">
                    <ol>
                        <li>NIK</li>
                        <li>Nama Lengkap</li>
                        <li>Tempat, Tanggal lahir</li>
                        <li>Pekerjaan</li>
                        <li>Alamat</li>
                        <li>Kewarganegaraan</li>
                        <li>Tgl Pencataan perkawinan</li>
                    </ol>
                </td>
                <td style="padding-top: 0px">
                    <ul style="list-style: none">
                        <li>:MAuza hanif ibrahim lala</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        
                    </ul>
                </td>
                
            </tr>
        </tbody>
        {{--  ayah  --}}
        
        <tbody class="tabel " >
            <tr class="tabe " >
                <td  style="padding-top: 0px;padding-bottom: 0px">
                    <ol>
                        <li>NIK</li>
                        <li>Nama Lengkap</li>
                        <li>Tempat, Tanggal lahir</li>
                        <li>Pekerjaan</li>
                        <li>Alamat</li>
                        <li>Kewarganegaraan</li>
                    </ol>
                </td>
                <td style="padding-top: 0px">
                    <ul style="list-style: none">
                        <li>:MAuza hanif ibrahim lala</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                    </ul>
                </td>
            </tr>
        </tbody>
        {{--  pelapor  --}}
        
        <tbody class="tabel " >
            <tr class=" " >
                <td  style="padding-top: 0px;padding-bottom: 0px">
                    <ol>
                        <li>NIK</li>
                        <li>Nama Lengkap</li>
                        <li>Tempat, Tanggal lahir</li>
                        <li>Umur</li>
                        <li>Pekerjaan</li>
                        <li>Alamat</li>
                        <li>Tanggal Lapor</li>
                    </ol>
                </td>
                <td style="padding-top: 0px">
                    <ul style="list-style: none">
                        <li>:MAuza hanif ibrahim lala</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        
                    </ul>
                </td>
                
            </tr>
        </tbody>
        {{--  saksi  --}}
        
        <tbody class="tabel  " >
            <tr class="tabe " >
                <td class="saksi"  style="padding-top: 0px;padding-bottom: 0px">
                    <p style="font-size: 14px"><b>saksi 1</b></p>
                    <ol>
                        <li>NIK</li>
                        <li>Pekerjaan</li>
                        <li>Umur</li>
                        <li>Alamat</li>
                    </ol>
                </td>
                <td class="saksi" style="padding-top: 0px">
                    <p style="font-size: 14px"><b>saksi 2</b></p>
                    <ol>
                        <li>NIK</li>
                        <li>Pekerjaan</li>
                        <li>Umur</li>
                        <li>Alamat</li>
                    </ol>
                </td>
                
                
            </tr>
            
        </tbody>
        </table>
      
    {{-- foot --}}
  
      
    <table align="left" border="" style=" margin-top:0px;padding-top:0px; ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td> Menegtahui</td>
    </tr>
    <tr style="">
        <td>a.n KEPALA DESA UMBULMARTANI</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>sUGIO</b></td>
    </tr>
   <table align="right" border="" style="margin_left:500px ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Umbulmartani, 20/Desember/2020 </td>
    </tr>
    <tr align="center">
        <td>pelapor</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>Rahmat edi</b></td>
    </tr>

</table>
    
    
    
  </body>
</html>