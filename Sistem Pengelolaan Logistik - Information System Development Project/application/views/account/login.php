<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <!-- Bootstrap -->
  <?php $this->load->view("_partials/head.php") ?>
  <?php $this->load->view("_partials/navbar_home.php") ?>
  <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
</head>
<style type="text/css">
  .background{
     color: #FF9B44;
  }
</style>
<body>
  <div class="container-fluid cfluid">
    <div class="row">
      <div class="col-md-8 kiri">
        <div class="container keterangan">
          <h5>Layanan Login Sharelog</h5>
          <p align="justify">Layanan Login SHARELOG merupakan aplikasi yang memungkinkan admin pusdalops dan tim TRC untuk mengakses fitur yang ada pada aplikasi.</p>

          <h5>Daftar Akun</h5>
          <p align="justify">Bagi pegawai pusdalops yang belum memiliki akun SHARELOG, anda harus daftar terlebih dahulu pada menu Sign Up.</p>

          <h5>Pusdalops</h5>
          <p align="justify">pegawai pusdalops yang sudah melakukan pendaftaran bisa sign in untuk melakukan pendataan logistik.</p>
          <h5>Tim TRC</h5>
          <p align="justify">Tim TRC dapat melaporkan bagaimana kondisi lokasi yang terkena bencana dan logistik apa yang dibutuhkan.</p>
          <h5>Peringatan Kemanan</h5>
          <p align="justify">Demi keamanan, mohon selalu logout dari ATRINAD dan mematikan browser jika telah selesai mengakses layanan SHARELOG.</p>
        </div>

      </div>
      <div class="col-md-4 kiri">
        <div class="container">
          <form class="form-signin" action="<?php echo base_url().'pusdalops/login'?>"  method="post" autocomplete="on">
            <br/>
            <center>
            <h5>Login <br/>Sebagai Pusdalops</h5>
            <br/>
            <h6 class="form-signin-heading">Enter your email and password</h6>
            <?php echo $this->session->flashdata('msg');?>
            <label for="email" class="sr-only">Email</label>
            <input type="text"  name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="email" required autofocus>
            <br/>
            <label for="password" class="sr-only">Password</label>
            <input type="password"  name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>"required>
            <br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
            <p><?php echo anchor('pusdalops/beranda','Beranda'); ?>      
            </p>
            <br/>
            <br/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid footer"><center>
    <p>SHARELOG</p></center>
<style>
.footer{
    background-color: #blue;
}
</style>

<style>
.keterangan{
  padding: 8%;
}
.form-signin{
  background:rgba(0,0,0,0.3);
  box-shadow: 0px 0px 20px 6px;
  padding-top:10%;
  padding-bottom: 10%;
  padding-left: 5%;
  padding-right: 5%;
  margin: 12%;
  background-color: #FFB76B;
}
.cfluid{
  background-color:#FF9B44 ;
}
</style>

</body>





<!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>


</html>
