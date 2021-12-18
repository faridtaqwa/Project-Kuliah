<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
   
    table.kop {
    font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
     
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

        <table align="center" style=" margin-top:20px">
            <tr align="center">
                <td>
                        <b><font size="2">SURAT KETERANGAN </font> </b> 
                </td>
            </tr>
            <tr align="center"><td>Nomor: {{ $pengajuan->nomer_surat }}</td></tr>
        </table>
    
    <table style="margin-top: 10px;margin-bottom:10px">
        <tr style=""> 
            <td>Saya, yang bertanda tangan di bawah ini:</td> 
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 150px">a. Nama</td>
            <td>: </td>
        </tr>
        <tr>
            <td style="width: 150px">b. Jabatan</td>
            <td>: </td>
        </tr>
    </table>
    <table style="margin-top:10px;margin-bottom:10px">
        <tr>
            <td style="">dengan ini menerangkan bahwa:</td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 150px" >a. Nama</td>
            <td> : {{ $pengajuan->nama }}</td>

        </tr>
        <tr>
            <td style="width: 150px">b. NIK</td>
            
            <td>:  {{ $pengajuan->nik }}</td>
        </tr>
        <tr>
            <td style="width: 150px">c. Tempat,tgl. lahir</td>
            <td>: {{ $pengajuan->tempat_lahir }} /  {{ \Carbon\Carbon::parse($pengajuan->tgl_lahir)->format('d-m-Y')}} </td>
        </tr>
        <tr>
            <td style="width: 150px">d. Jenis kelamin</td>
            <td>: {{ $pengajuan->jk }}</td>
        </tr>
        <tr>
            <td style="width: 150px">e. Agama</td>
            <td>: {{ $pengajuan->agama }}</td>
        </tr>
        <tr>
            <td style="width: 150px">f. Status Perkawinan</td>
            <td>: {{ $pengajuan->status_kawin }}</td>
        </tr>
        <tr>
            <td style="width: 150px">g. Pekerjaan</td>
            <td>: {{ $pengajuan->pekerjaan }}</td>
        </tr><tr>
            <td style="width: 150px">h. Alamat</td>
            <td>: {{ $pengajuan->alamat }}</td>
        </tr>
        <tr>
            <td style="width: 150px">i. Tujuan ke</td>
            <td>: {{ $pengajuan->tujuan }}</td>
        </tr><tr>
            <td style="width: 150px">j. Keperluan</td>
            <td>: {{ $pengajuan->keperluan }}</td>
        </tr>
    </table>
    <table style="margin-top:30px">
        <tr>
            <td>Berhubungan dengan keperluan yang bersangkutan, dimohon agar yang berwenang dapat memeberikan bantuan serta fasilitas seperlunya</td>      
        </tr>
    </table>
   
    <table style="margin-top: 30px">
        <tr>
            <td>Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya.</td>
        </tr>
    </table>
     
    <table align="right" border="" style=" margin-top:30px;padding-top:0px; ">
        <tr>
            <td height=""> Sleman,{{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }} </td>
        </tr>
         <tr style="">
            <td> Kalurahan,</td>
        </tr>
        
    </table>
   

   
</body>
</html>