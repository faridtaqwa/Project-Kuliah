<?php

namespace App\Http\Controllers;

use App\DataPengajuan;
use App\KategoriSurat;
use App\Mail\NotifJadi;
use App\Mail\NotifVerifikasi;
use App\Mail\NotifTolak;
use yajra\Datatables\Datatables;
use App\Pesanan;
use App\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
         
    }

    public function index()
    {
        $kategori = KategoriSurat::get();
        
        $Totalpesanan = Pesanan::all()->count();
        $pengajuan = DataPengajuan::all()->count();

        $a = DataPengajuan::where('kategori_surat_id',1)->count();
        $b = DataPengajuan::where('kategori_surat_id',2)->count();
        $c = DataPengajuan::where('kategori_surat_id',3)->count();
        $d = DataPengajuan::where('kategori_surat_id',4)->count();
        $e = DataPengajuan::where('kategori_surat_id',5)->count();
        $f = DataPengajuan::where('kategori_surat_id',6)->count();
        $g = DataPengajuan::where('kategori_surat_id',7)->count();

        $bar= [$a,$b,$c,$d,$e,$f,$g];
        $p = count($bar);
        $barmax = max($bar);
        
        $max= $Totalpesanan / ($p/2);
        $bar1 = json_encode($bar);
        //dd($bar);
       //satatus
        $a = Pesanan::where('status',0)->count();
        $b = Pesanan::where('status',1)->count();
        $c = Pesanan::where('status',2)->count();
        $d = Pesanan::where('status',3)->count();
        $e = Pesanan::where('status',4)->count();
        $pie = [$a,$b,$c,$d,$e];
       
        $fixpie = json_encode($pie); 

        
        return view('admin.dashboard.index', compact('kategori','Totalpesanan','bar1','max','fixpie','barmax'));
    }
    public function dashboardKades(){
         $kategori = KategoriSurat::get();
        return view('admin.dashboard.dashboardKades', compact('kategori'));
    }

    public function listkategori($id)
    {
        $kat = $id;
        $pengajuan = DataPengajuan::where('kategori_surat_id', $id)->orderBy('created_at', 'DESC')->get();
        //dd($pengajuan);
        $title = KategoriSurat::find($id);
        
        
        return view('admin.dashboard.listkategori', compact('pengajuan', 'title','kat'));
        

    }

    public function verifKelahiran($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_kelahiran', 'data_pengajuans.data','=','data_kelahiran.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kelahiran.*','data_kelahiran.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
                        ->first();
        return view('admin.dashboard.verifLahir', compact('data'));
    }
    public function verifKematian($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_kematian', 'data_pengajuans.data','=','data_kematian.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kematian.*','data_kematian.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
                        ->first();              
        return view('admin.dashboard.verifMati', compact('data'));
    }
    public function verifUmum($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_pengantar_umum', 'data_pengajuans.data','=','data_pengantar_umum.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_umum.*','data_pengantar_umum.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
                        ->first();              
        return view('admin.dashboard.verifUmum', compact('data'));
    }
    public function verifPengantarPindah($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_pengantar_pindah', 'data_pengajuans.data','=','data_pengantar_pindah.id')//('tabel1','tabel2.fkTabel2',=,'Tabel1.pk')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')//('tabel1','tabel2pk',=,'tabel1.fk'
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_pindah.*','data_pengantar_pindah.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
                        ->first();
        //dd($data);              
        return view('admin.dashboard.verifPindah', compact('data'));
    }
    public function verifPermohonanPindah($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah', 'data_pengajuans.data','=','data_permohonan_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah.*','data_permohonan_pindah.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
                        ->first();
        
        $pengajuan = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah', 'data_pengajuans.data','=','data_permohonan_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah.*','data_permohonan_pindah.id AS id_perm','nama_pemesan')
                        ->first(); 
    
        $data_kel = DB::table('keluarga_pindah')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();                              
        return view('admin.dashboard.verifPermohonanPindahwni', compact('data','data_kel'));
    }
    
    public function verifSuratPindahDatangWNI($id)
    {//6
        $data = DB::table('data_pengajuans')
                        ->join('data_surat_pindah_datang', 'data_pengajuans.data','=','data_surat_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_surat_pindah_datang.*','data_surat_pindah_datang.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
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
        return view('admin.dashboard.verifSuratPindahDatangWNI', compact('data','data_kel'));
    }
    public function verifPermohonanDatang($id)
    {//7 
        $data = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah_datang', 'data_pengajuans.data','=','data_permohonan_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah_datang.*','data_permohonan_pindah_datang.id AS data_id','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan')
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
        return view('admin.dashboard.verifPermohonanDatang', compact('data','data_kel'));
    }

    public function riwayat()
    {
        $pengajuan = DataPengajuan::with(['kategori', 'pesanan'])->orderBy('created_at', 'DESC')->get();
        return view('admin.riwayat', compact('pengajuan'));
    }

    public function verifikasi(Request $request)
    {
        //dd($request->all());
        $kat = $request['kat'];
        $kategori = KategoriSurat::find($kat);
        switch ($kat) {
            //kelahiran
            case ('1'):
                $no_surat = '472.11/'.$request->id_pesanan.'/'.'Umbulmartani//'.tgl_romawi(Carbon::now()->format('m')).'/'.Carbon::now()->format('Y');//tgl_romawi(Carbon::now()->format('m')).'/'. 
                $update = DB::table('data_kelahiran') 
                            ->where('id', $request['id_data'])
                            ->update([
                              'no_kk' => $request['no_kk'],
                              'nama_kk' => $request['nm_kk'],
                              'nik' => $request['nik'],
                              'nama' => $request['nama_bayi'],
                              'jk' => $request['jk'],
                              'tmpt_lahiran' => $request['tmpt_lahiran'],
                              'tmpt_lahir' => $request['tmpt_lahir'],
                              'hari_lahir'=> $request['hari_lahir'],
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
              break;
            //kematian
            case ('2'):
                 $no_surat = '472.11/'.$request->id_pesanan;
              $action = DB::table('data_kematian') 
                      ->where('id', $request['id_data'])
                      ->update([
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
              break;
            //pengantar umum
            case ('3'):
                 $no_surat ='10/'.$request->id_pesanan.'/'.'Umbulmartani/'.tgl_romawi(Carbon::now()->format('m')).'/'.Carbon::now()->format('Y');//tgl_romawi(Carbon::now()->format('m')).'/'. 
              $action = DB::table('data_pengantar_umum') 
                        ->where('id', $request['id_data'])
                        ->update([
                          'nik' => $request['nik'],
                          'nama' => $request['nama'],
                          'jk' => $request['jk'],
                          'tempat_lahir' => $request['tmpt_lahir'],
                          'tgl_lahir' => $request['tgl_lahir'],
                          'agama' => $request['agama'],
                          'pekerjaan' => $request['pekerjaan'],
                          'status_kawin' => $request['status_kawin'],
                          'alamat' => $request['alamat'],
                          'tujuan' => $request['tujuan'],
                          'keperluan' => $request['keperluan'],                              
                        ]);    
              break;
            //pengantar pindah
            case ('4'):
                 $no_surat = $request->id_pesanan.'/'.'Umbulmartani/'.tgl_romawi(Carbon::now()->format('m')).'/'.Carbon::now()->format('Y');//tgl_romawi(Carbon::now()->format('m')).'/'. 
              $data = DB::table('data_pengantar_pindah') 
                        ->where('id', $request['id_data'])
                        ->update([
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

              break;
            //permohonan pindah
            case ('5'):
                $no_surat = '471.21/'.$request->id_pesanan.'/'.'Umbulmartani/'.tgl_romawi(Carbon::now()->format('m')).'/'.Carbon::now()->format('Y');//tgl_romawi(Carbon::now()->format('m')).'/'. 
              $db = DB::table('data_permohonan_pindah') 
                        ->where('id', $request['id_data'])
                        ->update([
                          'no_kk' => $request['no_kk'],
                          'nama_kk' => $request['nama_kk'],
                          'alamat' => $request['alamat'],
                          'alasan_pindah'=>$request['alasan_pindah'],
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
              $data = $request['data'];
              $jml = count($request->data['nik']);
              for ($i = 0; $i < $jml; $i++) {
                $keluarga = DB::table('keluarga_pindah') 
                        ->where('id', $data['id'][$i])
                        ->update([
                          'nik' => $data['nik'][$i],
                          'nama' => $data['nama_kel'][$i],
                          'masa_berlaku' => $data['masa_berlaku'][$i],  
                          'shdk' => $data['shdk'][$i],                           
                        ]); 
              }  
              break;
            //pindah datang
            case ('6'):
                 $no_surat ='471.21/'.$request->id_pesanan.'/'.'Umbulmartani/'.tgl_romawi(Carbon::now()->format('m')).'/'.Carbon::now()->format('Y');//tgl_romawi(Carbon::now()->format('m')).'/'. 
                  $db = DB::table('data_surat_pindah_datang') 
                          ->where('id', $request['id_data'])
                          ->update([
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
                            'tgl_datang' => $request['tgl_datang'],
                            'tgl_lahir' => $request['tgl_lahir'],
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
                  $data = $request['data'];
                  $jml = count($request->data['nik']);
                  for ($i = 0; $i < $jml; $i++) {
                    $keluarga = DB::table('keluarga_datang') 
                            ->where('id', $data['id'][$i])
                            ->update([
                              'nik' => $data['nik'][$i],
                              'nama' => $data['nama_kel'][$i],
                              'masa_berlaku' => $data['masa_berlaku'][$i],  
                              'shdk' => $data['shdk'][$i],                            
                            ]); 
                  } 
                  
              break;
            //permohonan pindah datang
            case ('7'):
              $no_surat = '472.21/'.$request->id_pesanan;
              $action = DB::table('data_permohonan_pindah_datang') 
                         ->where('id', $request['id_data'])
                        ->update([
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
                          'tgl_datang' => $request['tgl_datang'],
                          'tgl_lahir' => $request['tgl_lahir'],
                          'nama' => $request['nama'],
                          'tgl_datang'=>$request['tgl_datang'],
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
                  $data = $request['data'];
                  $jml = count($request->data['nik']);
                  for ($i = 0; $i < $jml; $i++) {
                    $keluarga = DB::table('keluarga_perm_datang') 
                            ->where('id', $data['id'][$i])
                            ->update([
                              'nik' => $data['nik'][$i],
                              'nama' => $data['nama_kel'][$i],
                              'masa_berlaku' => $data['masa_berlaku'][$i],  
                              'shdk' => $data['shdk'][$i],                            
                            ]); 
                  }
                  
              break;
              
          }
        $idpesan = $request->id_pesanan;
        $idpengaju = $request->id_pengaju;
        $pesanan = Pesanan::find($idpesan);
        $pengajuan = DataPengajuan::with(['kategori', 'warga'])->find($idpengaju);
        // if(!empty($pengajuan->warga->email))
        // {
        //     Mail::to($pengajuan->warga->email)->send(new NotifVerifikasi($pengajuan));
        // }
        $pesanan->update([
            'tanggal_verifikasi' => now(),
            'nomer_surat' => $no_surat,
            'status' => 1, 
        ]);
        return redirect('/Administrator/list-kategori/'.$request->kat);
        
    }

    public function tolak(Request $request){
        // $idpesan = $request->id_pesanan;
        // $idpengaju = $request->id_pengaju;


        $id= $request->idpesantolak;
        //dd($request->all());
        $pesanan = Pesanan::find($id);
        //dd($pesanan->pengajuan);
        $pengajuan = DataPengajuan::with(['kategori','warga','pesanan'])->find($id);
        
        
        
        // if(!empty($pengajuan->warga->email)){
        //     Mail::to($pengajuan->warga->email)->send( new NotifTolak($pengajuan));
        // }
    
        $pesanan->update([
            'status'=>3,
            'alasan_tolak'=>$request['alasantolak']
        ]);

        return redirect('/Administrator/list-kategori/'.$request->kat);
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
                //return response()->json();
                //dd(json_decode($pengajuan));
                
                // $nomor = DB::table('pesanans')->where('data_pengjuan.id',$id)->select('nomor_surat'); 
                $pdf = PDF::loadview('suratkelahiran', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                 //dd( $pengajuan);
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
                $pdf = PDF::loadview('suratkematian', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
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
                $pdf = PDF::loadview('suratketeranganpindahdatang', compact('pengajuan','nomor_surat','data_kel'))->setPaper('f4', 'portrait');
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
                $pdf = PDF::loadview('formpindahdatangwni', compact('pengajuan','kategori','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            
        }
    }

    public function emailjadi($id)
    {
        $pengajuan = DataPengajuan::with(['kategori', 'warga', 'pesanan'])->find($id);

        // if(!empty($pengajuan->warga->email))
        // {
        //     Mail::to($pengajuan->warga->email)->send(new NotifJadi($pengajuan));
        // }

        // dd('berhasil');
        $pengajuan->pesanan->update([
            'tanggal_jadi' => now(),
            'status' => 2,
        ]);

        return redirect()->back()->with(['success' => 'Data Jadi']);
    }

    public function admin()
    {
        $pegawai = User::get();
        return view('pegawai.index', compact('pegawai'));
    }

    public function editadmin($id)
    {
        $pegawai = User::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function register()
    {
        return view('pegawai.register');
    }

    public function registerstore(Request $request)
    {
        
        $request->validate([
            'nomor_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',

        ]);

        $user = User::create([
            'nomer_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama_pegawai,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);
        return redirect(route('admin.index'));
        // $request->validate([
        //     'nomor_pegawai' => 'required',
        //     'nama_pegawai' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|confirmed',
        // ]);

    //     $user = User::create([
    //         'nomer_pegawai' => $request->nomor_pegawai,
    //         'nama' => $request->nama_pegawai,
    //         'email' => $request->email,
    //         'role' => $request->role,
    //         'password' => $request->password,
    //     ]);
    //     return redirect(route('admin.index'));
    }

    public function adminupdate(Request $request, $id)
    {
        $request->validate([
            'nomor_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'email' => 'required',
            'password' => 'nullable|confirmed',
        ]);
        //dd($request->all());

        $admin = User::find($id);
        $password = $admin->password;

        if($request->has('password')){
            $password = $request->password;
        }

        $admin->update([
            'nomer_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama_pegawai,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $password,
        ]);
        return redirect(route('admin.index')); 
    }

    public function destroyadmin($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect(route('admin.index')); 
    }

    public function listdatakategori(DataPengajuan $pesanan){
        //return $pesanan->id;
        $view = View::make('admin.dashboard.load')->with('pesanan',$pesanan)->render();

        return response()->json(['view'=>$view,'nama'=>$pesanan->nama_pemesan],200);
        //return response ;
    }

    public function cekPesanan(){
        return response()->json(['jumlah'=>DataPengajuan::count()],200);
    }

    public function rekapTahun(Request $request){
        
        
        $pengajuan = DataPengajuan::orderBy('created_at','ASC')->get()->groupBy(function($item){
            return $item->created_at->format('Y');
        });//get Year
        $tahun=(array_keys($pengajuan->toArray()));
        //$filtertahun= $request->get('tahun');
        //$filterbulan= $request->get('bulan');
        // if($filtertahun){
        //     $dataPenhajuan= DataPengajuan::where('created_at',$filtertahun)->paginate(10);
        // }
        return view('admin.rekap.rekapTahun', compact('tahun'));

    }
    public function rekapdata(Request $request){
        $pengajuan = DataPengajuan::with(['kategori','pesanan','warga']);

        if($request->tahun != 'all'){
            $pengajuan= $pengajuan->whereYear('created_at',$request->tahun);
        }
        if($request->bulan != 'all'){
            $pengajuan= $pengajuan->whereMonth('created_at',$request->bulan);
        }
        // dd($pengajuan);

        return Datatables::of($pengajuan)->make();
        
    }

    public function ambil($id)
    {
        $pengajuan = DataPengajuan::with(['kategori', 'warga', 'pesanan'])->find($id);

        // dd('berhasil');
        $pengajuan->pesanan->update([
            'is_ambil' => true,
            'status'=>4,
            'tanggal_ambil'=> now()
        ]);

        return redirect()->back()->with(['success' => 'Data Diambil']);
    }
    
    public function reset(){

        $pesanan = DB::tabel('pesanans')->truncate();
        $pengajuan = DB::tabel('data_pengajuans')->truncate();
        $kelahiran = DB::tabel('data_kelahiran')->truncate();
        $kematin = DB::tabel('data_kematian')->truncate();
        $pengpindah = DB::tabel('data_pengantar_pindah')->truncate();
        $pengumum = DB::tabel('data_pengantar_umum')->truncate();
        $pengpindahdatang = DB::tabel('data_pengantar_pindah_datang')->truncate();
        $pengpsuratpindahdatang = DB::tabel('data_surat_pindah_datang')->truncate();
        $pengpindahkel = DB::tabel('keluarga_datang')->truncate();
        $pengpindahkel = DB::tabel('keluarga_pindah')->truncate();
        $pengsuratpindahkel = DB::tabel('keluarga_perm_pindah')->truncate();



    }
}
