{{-- {{ dd(Auth::guard('warga'))->nama() }} --}}
@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
   

    <div class="row align-items-md-center">
        <div class="card col-md-12 shadow  m-2 ml-3">
            <p style="text-align:center;" class="mb-0 mt-3" >
                <img class="aligncenter " style="height: 300px ; width:300px; border:none" src="https://2.bp.blogspot.com/-g16U0mUd_wU/VjXtBN9_cHI/AAAAAAAAAek/nfHtGiEMiJo/s1600/KAB.SLEMAN.jpg"  alt="">

            </p>
            
            <h3 class="text-center mb-4 ">Selamat Datang di aplikasi pemesanan surat Umbulmartani </h3>
            <div class="text-center mt-1 mb-3">
                <a class="btn btn-primary" href="{{ route('warga.dashboard') }}"> Pesan surat</a>

            </div>
        </div>

    </div>
@endsection

