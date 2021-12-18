<?php

namespace App\Http\Controllers\Warga;

use App\DataPengajuan;
use App\Http\Controllers\Controller;
use App\Warga;
use App\KategoriSurat;
use App\Pesanan;
use Illuminate\Support\Facades\Validator;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{

    public function dashboard()
    {
        // dd(Auth::guard('warga')->id());
        $kategori = KategoriSurat::get();
        //return view('admin.pengajuan.create', compact('kategori'));
        return view('warga.pengajuanwarga', compact('kategori'));

    }
    public function home(){

        //$warga = Warga::get();

        return view('warga.homewarga');
    }

    public function pilihSurat(Request $request)
    {
        $kategori = $request['id_kategori'];
        switch ($kategori) {
            case ('1'):
              //dd($kategori);
                return view('warga.form.kelahiranForm',compact('kategori'));
              break;
            case ('2'):
                return view('warga.form.kematianForm',compact('kategori'));
              break;
            case ('3'):
                return view('warga.form.umumForm',compact('kategori'));
              break;
            case ('4'):
                return view('warga.form.pindahForm',compact('kategori'));
              break;
            case ('5'):
                return view('warga.form.formpindahForm',compact('kategori'));
              break;
            case ('6'):
                return view('warga.form.datangForm',compact('kategori'));
              break;
            case ('7'):
                return view('warga.form.formPermohonanPindahDatangWNI',compact('kategori'));
              break;
          }   
    }

    public function pengajuanstore(Request $request)
    {
      //dd($request->all());
        $kat = $request['kategori'];
        $kategori = KategoriSurat::find($kat);
        switch ($kat) {
            //kelahiran
            case ('1'):
                $data = DB::table('data_kelahiran') 
                            ->insert([
                              'no_kk' => $request['no_kk'],
                              'nama_kk' => $request['nm_kk'],
                              'nik' => $request['nik'],
                              'nama' => $request['nama_bayi'],
                              'jk' => $request['jk'],
                              'tmpt_lahiran' => $request['tmpt_lahiran'],
                              'tmpt_lahir' => $request['tmpt_lahir'],
                              'hari_lahir'=>$request['hari_lahir'],
                              'jam_lahir'=>$request['jam_lahir'],
                              'tgl_lahir' => $request['tgl_lahir'],
                              'jenis_kelahiran' => $request['jns_lahiran'],
                              'kelahiran_ke' => $request['kelahiran_ke'],
                              'penolong_lahir' => $request['pnlg_kelahiran'],
                              'berat' => $request['berat'],
                              'panjang' => $request['panjang'],
                              'ibu_nik' => $request['ibu_nik'],
                              'ibu_nama' => $request['ibu_nm'],
                              'ibu_tmpt_lahir' => $request['ibu_tmpt_lahir'],
                              'ibu_tgl_lahir' => $request['ibu_tgl_lahir'],
                              'ibu_pekerjaan' => $request['ibu_pekerjaan'],
                              'ibu_alamat' => $request['ibu_almt'],
                              'ibu_kewarganegaraan' => $request['ibu_warganegara'],
                              'ibu_tgl_kawin' => $request['ibu_tgl_kawin'],
                              'ayah_nik' => $request['ayah_nik'],
                              'ayah_nama' => $request['ayah_nm'],
                              'ayah_tmpt_lahir' => $request['ayah_tmpt_lahir'],
                              'ayah_tgl_lahir' => $request['ayah_tgl_lahir'],
                              'ayah_pekerjaan' => $request['ayah_pekerjaan'],
                              'ayah_alamat' => $request['ayah_almt'],
                              'ayah_kewarganegaraan' => $request['ayah_warganegara'],
                              'pelapor_nik' => $request['pelapor_nik'],
                              'pelapor_nama' => $request['pelapor_nm'],
                              'pelapor_tmp_lahir' => $request['pelapor_tmpt_lahir'],
                              'pelapor_tgl_lahir' => $request['pelapor_tgl_lahir'],
                              'pelapor_kerja' => $request['pelapor_pekerjaan'],
                              'pelapor_umur' => $request['pelapor_umur'],
                              'pelapor_alamat' => $request['pelapor_almt'],
                              'tgl_lapor' => $request['tgl_lapor'],
                              'saksi_nik' => $request['saksi1_nik'],
                              'saksi_nama' => $request['saksi1_nm'],
                              'saksi_umur' => $request['saksi1_umur'],
                              'saksi_alamat' => $request['saksi1_almt'],
                              'saksi_2_nik' => $request['saksi2_nik'],
                              'saksi_2_nama' => $request['saksi2_nm'],
                              'saksi_2_umur' => $request['saksi2_umur'],
                              'saksi_2_alamat' => $request['saksi2_almt'],                              
                            ]);
                      $cek_id = DB::table('data_kelahiran')
                                  ->orderBy('id','desc')
                                  ->first();
              break;
            //kematian
            case ('2'):
              $data = DB::table('data_kematian') 
                      ->insert([
                        'no_kk' => $request['no_kk'],
                        'nama_kk' => $request['nm_kk'],
                        'nik' => $request['nik'],
                        'nama' => $request['nama'],
                        'jk' => $request['jk'],
                        'tmpt_lahir' => $request['tmpt_lahir'],
                        'hari_meninggal'=>$request['hari_meninggal'],
                        'tgl_lahir' => $request['tgl_lahir'],
                        'umur'=>$request['umur'],
                        'agama' => $request['agama'],
                        'pekerjaan' => $request['pekerjaan'],
                        'alamat' => $request['alamat'],
                        'anak_ke' => $request['anak_ke'],
                        'meninggal_tgl' => $request['meninggal_tgl'],
                        'tmpt_meninggal' => $request['tmpt_meninggal'],
                        'jam_meninggal'=>$request['jam_meninggal'],
                        'sebab' => $request['sebab'],
                        'tmpt_kematian' => $request['tmpt_kematian'],
                        'menerangkan' => $request['menerangkan'],
                        'ibu_nik'=>$request['ibu_nik'],
                        'ibu_nama' => $request['ibu_nama'],
                        'ibu_tmpt_lahir' => $request['ibu_tmpt_lahir'],
                        'ibu_tgl_lahir' => $request['ibu_tgl_lahir'],
                        'ibu_pekerjaan' => $request['ibu_pekerjaan'],
                        'ibu_alamat' => $request['ibu_alamat'],
                        'ibu_kewarganegaraan' => $request['ibu_kewarganegaraan'],
                        'ayah_nik' => $request['ayah_nik'],
                        'ayah_nama' => $request['ayah_nama'],
                        'ayah_tmpt_lahir' => $request['ayah_tmpt_lahir'],
                        'ayah_tgl_lahir' => $request['ayah_tgl_lahir'],
                        'ayah_pekerjaan' => $request['ayah_pekerjaan'],
                        'ayah_alamat' => $request['ayah_alamat'],
                        'ayah_kewarganegaraan' => $request['ayah_kewarganegaraan'],
                        'pelapor_nik' => $request['pelapor_nik'],
                        'pelapor_nama' => $request['pelapor_nama'],
                        'pelapor_tmp_lahir' => $request['pelapor_tmpt_lahir'],
                        'pelapor_tgl_lahir' => $request['pelapor_tgl_lahir'],
                        'pelapor_kerja' => $request['pelapor_pekerjaan'],
                        'pelapor_umur' => $request['pelapor_umur'],
                        'pelapor_alamat' => $request['pelapor_alamat'],
                        'tgl_lapor' => $request['tgl_lapor'],
                        'saksi1_nik' => $request['saksi1_nik'],
                        'saksi1_nama' => $request['saksi1_nama'],
                        'saksi1_umur' => $request['saksi1_umur'],
                        'saksi1_alamat' => $request['saksi1_alamat'],  
                        'saksi2_nik' => $request['saksi2_nik'],
                        'saksi2_nama' => $request['saksi2_nama'],
                        'saksi2_umur' => $request['saksi2_umur'],
                        'saksi2_alamat' => $request['saksi2_alamat'],                              
                      ]);
            $cek_id = DB::table('data_kematian')
                        ->orderBy('id','desc')
                        ->first();
              break;
            //pengantar umum
            case ('3'):
              $data = DB::table('data_pengantar_umum') 
                        ->insert([
                          'nik' => $request['nik'],
                          'nama' => $request['nama'],
                          'jk' => $request['jk'],
                          'tempat_lahir' => $request['tempat_lahir'],
                          'tgl_lahir' => $request['tgl_lahir'],
                          'agama' => $request['agama'],
                          'pekerjaan' => $request['pekerjaan'],
                          'status_kawin' => $request['status_kawin'],
                          'alamat' => $request['alamat'],
                          'tujuan' => $request['tujuan'],
                          'keperluan' => $request['keperluan'],                              
                        ]);    
                  $cek_id = DB::table('data_pengantar_umum')
                              ->orderBy('id','desc')
                              ->first();
              break;
            //pengantar pindah
            case ('4'):
              $data = DB::table('data_pengantar_pindah') 
                        ->insert([
                          'nik' => $request['nik'],
                          'nama' => $request['nama'],
                          'tempat_lahir' => $request['tempat_lahir'],
                          'tgl_lahir' => $request['tgl_lahir'],
                          'no_kk' => $request['no_kk'],
                          'nama_kk' => $request['nama_kk'],
                          'alamat' => $request['alamat'],
                          'desa' => $request['desa'],
                          'desa' => $request['desa'],
                          'kecamatan' => $request['kecamatan'],
                          'tujuan_alamat' => $request['tujuan_alamat'],
                          'tujuan_desa' => $request['tujuan_desa'],
                          'tujuan_kecamatan' => $request['tujuan_kecamatan'],
                          'tujuan_kabupaten' => $request['tujuan_kabupaten'],
                          'tujuan_provinsi' => $request['tujuan_provinsi'],
                          'jumlah_pindah' => $request['jumlah_pindah'],                              
                        ]);    
              $cek_id = DB::table('data_pengantar_pindah')
                          ->orderBy('id','desc')
                          ->first();
              break;
            //permohonan pindah
            case ('5'):
              $db = DB::table('data_permohonan_pindah') 
                        ->insert([
                          'no_kk' => $request['no_kk'],
                          'nama_kk' => $request['nama_kk'],
                          'alamat' => $request['alamat'],
                          'desa' => $request['desa'],
                          'kecamatan' => $request['kecamatan'],
                          'kab' => $request['kab'],
                          'provinsi' => $request['provinsi'],
                          'kodepos' => $request['kodepos'],
                          'nik_pemohon' => $request['nik_pemohon'],
                          'tempat_lahir' => $request['tempat_lahir'],
                          'tgl_lahir' => $request['tgl_lahir'],
                          'nama' => $request['nama'],
                          'alasan_pindah' => $request['alasan_pindah'],
                          'tujuan_desa'=>$request['tujuan_desa'],
                          'tujuan_kecamatan'=>$request['tujuan_kecamatan'],
                          'tujuan_alamat_pindah' => $request['tujuan_alamat_pindah'],
                          'tujuan_kab' => $request['tujuan_kab'],
                          'tujuan_prov' => $request['tujuan_prov'], 
                          'tujuan_kodepos' => $request['tujuan_kodepos'], 
                          'jenis_pindah' => $request['jenis_pindah'],
                          'status_kk' => $request['status_kk'],  
                          'status_no_kk_pindah' => $request['status_no_kk_pindah'],                              
                        ]);    
              $cek_id = DB::table('data_permohonan_pindah')
                          ->orderBy('id','desc')
                          ->first();
              $data = $request['data'];
              $jml = count($request->data['nik']);
              for ($i = 0; $i < $jml; $i++) {
                $keluarga = DB::table('keluarga_pindah') 
                        ->insert([
                          'nik' => $data['nik'][$i],
                          'nama' => $data['nama_kel'][$i],
                          'masa_berlaku' => $data['masa'][$i],  
                          'shdk' => $data['shdk'][$i],
                          'id_perm_pindah' => $cek_id->id,                            
                        ]); 
              }  
              break;
            //pindah datang
            case ('6'):
                  $db = DB::table('data_surat_pindah_datang') 
                          ->insert([
                            'no_kk' => $request['no_kk'],
                            'nama_kk' => $request['nama_kk'],
                            'alamat' => $request['alamat'],
                            'desa' => $request['desa'],
                            'kecamatan' => $request['kecamatan'],
                            'kabupaten' => $request['kabupaten'],
                            'provinsi' => $request['provinsi'],
                            'kodepos' => $request['kodepos'],
                            'nik_pemohon' => $request['nik_pemohon'],
                            'tmpt_lahir' => $request['tmpt_lahir'],
                            'tgl_lahir' => $request['tgl_lahir'],
                            'tgl_datang' => $request['tgl_datang'],

                            'nama' => $request['nama'],
                            'tujuan_kk' => $request['tujuan_kk'],
                            'tujuan_no_kk' => $request['tujuan_no_kk'],
                            'tujuan_nama_kk' => $request['tujuan_nama_kk'],
                            'tujuan_alamat' => $request['tujuan_alamat'],
                            'tujuan_desa' => $request['tujuan_desa'],
                            'tujuan_kecamatan' => $request['tujuan_kecamatan'],
                            'tujuan_kabupaten' => $request['tujuan_kabupaten'],
                            'tujuan_provinsi' => $request['tujuan_provinsi'], 
                            'tujuan_kodepos' => $request['tujuan_kodepos'],                               
                          ]);    
                  $cek_id = DB::table('data_surat_pindah_datang')
                              ->orderBy('id','desc')
                              ->first();
                  $data = $request['data'];
                  $jml = count($request->data['nik']);
                  for ($i = 0; $i < $jml; $i++) {
                    $keluarga = DB::table('keluarga_datang') 
                            ->insert([
                              'nik' => $data['nik'][$i],
                              'nama' => $data['nama_kel'][$i],
                              'masa_berlaku' => $data['masa'][$i],  
                              'shdk' => $data['shdk'][$i],
                              'id_perm_pindah' => $cek_id->id,                            
                            ]); 
                  } 
              break;
            //permohonan pindah datang
            case ('7'):
              $db = DB::table('data_permohonan_pindah_datang') 
                        ->insert([
                          'no_kk' => $request['no_kk'],
                          'nama_kk' => $request['nama_kk'],
                          'alamat' => $request['alamat'],
                          'desa' => $request['desa'],
                          'kecamatan' => $request['kecamatan'],
                          'kabupaten' => $request['kabupaten'],
                          'provinsi' => $request['provinsi'],
                          'kodepos' => $request['kodepos'],
                          'nik_pemohon' => $request['nik_pemohon'],
                          'tmpt_lahir' => $request['tmpt_lahir'],
                          'tgl_lahir' => $request['tgl_lahir'],
                          'tgl_datang' => $request['tgl_datang'],

                          'nama' => $request['nama'],
                          'tujuan_kk' => $request['tujuan_kk'],
                          'tujuan_no_kk' => $request['tujuan_no_kk'],
                          'tujuan_nama_kk' => $request['tujuan_nama_kk'],
                          'tujuan_alamat' => $request['tujuan_alamat'],
                          'tujuan_desa' => $request['tujuan_desa'],
                          'tujuan_kecamatan' => $request['tujuan_kecamatan'],
                          'tujuan_kabupaten' => $request['tujuan_kabupaten'],
                          'tujuan_provinsi' => $request['tujuan_provinsi'], 
                          'tujuan_kodepos' => $request['tujuan_kodepos'],                               
                        ]);    
                  $cek_id = DB::table('data_permohonan_pindah_datang')
                              ->orderBy('id','desc')
                              ->first();
                  $data = $request['data'];
                  $jml = count($request->data['nik']);
                  for ($i = 0; $i < $jml; $i++) {
                    $keluarga = DB::table('keluarga_perm_datang') 
                            ->insert([
                              'nik' => $data['nik'][$i],
                              'nama' => $data['nama_kel'][$i],
                              'masa_berlaku' => $data['masa'][$i],  
                              'shdk' => $data['shdk'][$i],
                              'id_perm_pindah' => $cek_id->id,                            
                            ]); 
                  }
              break;
          }

        $pengajuan = DataPengajuan::create([
                'warga_id' => Auth::guard('warga')->id(),
                'data'=> $cek_id->id,
                'kategori_surat_id'=>$kat,
                'jenis_kelamin'=> 'pria',
                'status_perkawinan'=>'kawin',
                'agama'=>'islam',
                'nama_pemesan'=> $request['nama_pemesan'],////
                    
        ]);

        
        $kode= $kategori->kode_surat;
        $ids= $kategori->id;
        //dd($kode);
        $pesanan = Pesanan::create([
            'data_pengajuan_id' => $pengajuan->id,
        //    'nomer_surat' => $kode.'/ '.'Kec.Ngemplak'. '/'. $ids.' /' . tgl_romawi(Carbon::now()->format('m')).'/'. Carbon::now()->format('Y'),
            'tanggal_pesan' => now(),
        ]);

      
        return redirect(route('warga.riwayat'));

    }

    public function riwayat(Request $request)
    {
       
        
        $pengajuan = DataPengajuan::with(['kategori','pesanan','warga'])->where('warga_id', Auth::guard('warga')->id())->orderBy('created_at', 'DESC')->paginate(10);

         

        return view('warga.riwayat',compact('pengajuan'));
    }
    public function filter(Request $request){

        //$pengajuan = DataPengajuan::with(['kategori','pesanan','warga'])->where('warga_id', Auth::guard('warga')->id())->orderBy('created_at', 'DESC')->get();
        $status= $request->get('status');
        if($status == 'all'){
          $pengajuan = DataPengajuan::with(['kategori','pesanan','warga'])->where('warga_id', Auth::guard('warga')->id())->orderBy('created_at', 'DESC')->paginate(10);
        }else{
          $pengajuan = DataPengajuan::with(['kategori','pesanan','warga'])->where('warga_id', Auth::guard('warga')->id())->
              whereHas('pesanan',function($pesanan)use($status){
                $pesanan->where('status',$status);
              }
              )->paginate(10);
        }
        
        return view('warga.riwayat',compact('pengajuan'));
    }
    
    public function logout()
    {
        auth()->guard('warga')->logout();
        return redirect(route('warga.login'));
    }

    public function labelPengajuan(KategoriSurat $id){
      //menampilkan kolom surat dinamis
        $view = View::make('admin.kategori.load')->with('kategori',$id)->render();
        return response()->json(['view'=>$view],200);

    }

    public function print($id)
    {
        $cek_kat = DB::table('data_pengajuans')
                        ->where('id',$id)
                        ->first();
        switch ($cek_kat->kategori_surat_id) {
            //keterangan kelahiran
            case '1':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_kelahiran', 'data_pengajuans.data','=','data_kelahiran.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kelahiran.*','nama_pemesan','nomer_surat')
                        ->first(); 
                $pdf = PDF::loadview('suratkelahiran', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //keterangan kematian
            case '2':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_kematian', 'data_pengajuans.data','=','data_kematian.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kematian.*','nama_pemesan','nomer_surat')
                        ->first(); 
                //return view('suratkematian');
                $pdf = PDF::loadview('suratkematian', compact('pengajuan','kategori'))->setPaper('a4', 'portrait');
                return $pdf->stream();
                break;
            //pengantar umum
            case '3':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_pengantar_umum', 'data_pengajuans.data','=','data_pengantar_umum.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_umum.*','nama_pemesan','nomer_surat')
                        ->first(); 
                $pdf = PDF::loadview('suratketerangan', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //pengantar pindah
            case '4':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_pengantar_pindah', 'data_pengajuans.data','=','data_pengantar_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_pindah.*','nama_pemesan','nomer_surat')
                        ->first(); 
                $pdf = PDF::loadview('suratpengantarpindah', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //permohonan pindah wni
            case '5':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah', 'data_pengajuans.data','=','data_permohonan_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah.*','data_permohonan_pindah.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
                 $data_kel = DB::table('keluarga_pindah')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();
                $pdf = PDF::loadview('formpindahwni', compact('pengajuan','kategori','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //pengantar datang
            case '6':
                $nomor_surat = DB::table('pesanans')
                        ->join('data_pengajuans', 'pesanans.data_pengajuan_id','=','data_pengajuans.id')
                        ->where('pesanans.data_pengajuan_id', $id)
                        ->select('pesanans.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_surat_pindah_datang', 'data_pengajuans.data','=','data_surat_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_surat_pindah_datang.*','data_surat_pindah_datang.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
                 $data_kel = DB::table('keluarga_datang')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();
                $pdf = PDF::loadview('formpindahdatangwni', compact('pengajuan','nomor_surat','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //permohonan datang    
            case '7':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah_datang', 'data_pengajuans.data','=','data_permohonan_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah_datang.*','data_permohonan_pindah_datang.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
                 $data_kel = DB::table('keluarga_perm_datang')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();
                $pdf = PDF::loadview('suratketeranganpindahdatang', compact('pengajuan','kategori','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            
        }
    }
     
}
