@extends('master')

@section('content')

<div class="container shadow"> 
  <div class="row">
    <div class="col home-left" >
      <table>
        <tr>
          <td>
            <h3 style="font-weight: bold;">Sistem Pengelolaan Tim Penanggulangan Bencana</h3>
          </td>
        </tr>
        @guest
        <tr>
          <td>
            <a href="/auth/register" class="btn btn-primary btn-spirit" style="width: 70%; margin-top: 30px"><b>Daftar</b></a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="/login" class="btn btn-primary btn-spirit" style="width: 70%; margin-top: 10px"><b>Login</b></a>
          </td>
        </tr>
        @endguest
      </table>
    </div>
    <div class="col col-7">
      <img src="image/home.svg" width=100%>
    </div>
  </div>
</div>

<div class="container shadow">
  <h4 style="display: block;text-align: center;font-weight: bolder; margin-bottom: 30px">CARA KERJA</h4>
  <div class="row">
    <div class="col">
      <img src="/image/how1.svg" class="how">
    </div>
  </div>
     <div class="row">
    <div class="col" style="padding: 20px;">
      <h5 style="text-align: center; font-size: 120%;"><b>Masyarakat mendaftar menjadi relawan</b></h5>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img src="/image/how2.svg" class="how">
    </div>
  </div>
     <div class="row">
    <div class="col" style="padding: 20px;">
      <h5 style="text-align: center; font-size: 120%;"><b>Admin akan memilih tim dan ketua tim untuk relawan</b></h5>
    </div>
  </div>
   <div class="row">
    <div class="col">
      <img src="/image/how3.svg" class="how">
    </div>
  </div>
     <div class="row">
    <div class="col" style="padding: 20px;">
      <h5 style="text-align: center; font-size: 120%;"><b>Admin akan memobilisasi tim ke posko bencana</b></h5>
    </div>
  </div>
   <div class="row">
    <div class="col">
      <img src="/image/how4.svg" class="how">
    </div>
  </div>
     <div class="row">
    <div class="col" style="padding: 20px;">
      <h5 style="text-align: center; font-size: 120%;"><b>Relawan dapat melihat anggota tim dan detail mobilisasi dari dashboard</b></h5>
    </div>
  </div>
</div>

<div class="container shadow">

<h4 style="display: block;text-align: center;font-weight: bolder;"> TEAM </h4>
<div class="row" style="margin-top: 30px;">
    <div class="col">
      <div class="cropfoto">
        <img src="/image/boris.png" class="foto">
      </div>
      <label style="text-align: center; display: block; margin-top: 20px; font-weight: bold;">Muhammad Luthfi</label>
    </div>
    <div class="col">
      <div class="cropfoto">
        <img src="/image/rahmad.jpg" class="foto">
      </div>
      <label style="text-align: center; display: block;margin-top: 20px;font-weight: bold;">Rahmad Hidayat</label>
    </div>
    <div class="col">
      <div class="cropfoto">
        <img src="/image/farid.jpg" class="foto">
      </div>
      <label style="text-align: center; display: block;margin-top: 20px;font-weight: bold;">Muhammad Farid</label>
    </div>
</div>
</div>
<nav class="navbar bottom navbar-light bg-light">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" href="/admin">ADMIN</a>
  </li>
</nav>
@endsection