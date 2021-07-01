<!DOCTYPE html>
<html>
<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
<head>
	<title></title>
		<?php $this->load->view("_partials/head.php") ?>
    <style>
.headline{
  background-image: url(<?php echo base_url(); ?>assets/image/1.jpg);
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
  background-size: 100%;
  font :white;
  padding-top: 10%;
  padding-bottom: 10%;
  padding-right: 15%;
  padding-left: 15%;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}
.judul{
  color: #FF9B44;
}
.deskripsi{
  color: #FF9B44;
}
</style>

</head>
<?php $this->load->view("_partials/navbar_home.php") ?>
<body>
	
 <left>
<div class="container-fluid headline">
  	<h1 class="judul">Sharelog</h1>
    <h1 class="judul">Sistem Distribusi Logistik</h1>
  <br/>
  <p class="lead deskripsi"><strong>Sharelog membantu memudahkan pendistribusian </strong></p>
  <p class="lead deskripsi"><strong>logistik untuk masyarakat </strong></p>
  <p class="lead deskripsi"><strong>yang terkena bencana </strong></p>
  <p class="text-center"><?php echo anchor('pusdalops/login','Masuk sebagai Pusdalops'); ?> </p>
  <p class="text-center"><?php echo anchor('pusdalops/register','Daftar sebagai Pusdalops'); ?></p>
  <p class="text-center"><?php echo anchor('trc/login','Masuk sebagai trc'); ?> </p>
  <p class="text-center"><?php echo anchor('trc/register','Daftar sebagai trc'); ?></p>  
   
  </div>
<center>
<div class="container">
<div class="row">
  <div class="col-md-4">
<img src="<?php echo base_url(); ?>assets/image/table.png" alt="">
<br/>
<br/>
<p class="lead"><span><strong>Lengkap</strong></span> 
<br/>
  <br/> Tersedia semua data logistik baik yang sudah didistribusikan atau belum didistribusikan</p>
  </div>
  <div class="col-md-4">
<img src="<?php echo base_url(); ?>assets/image/chart.png" alt="">
<br/>
<br/>
<p class="lead"><span><strong>Laporan</strong></span> 
  <br/>
  <br/> Membantu meninjau kembali logistik yang paling banyak didistribusikan</p>
  </div>
  <div class="col-md-4">
<img src="<?php echo base_url(); ?>assets/image/clock.png" alt="">
<br/>
<br/>
<p class="lead"><span><strong>CEPAT & AKURAT</strong></span> 
  <br/>
  <br/> Data logistik yang lengkap membantu memudahkan prioritas untuk pendistribusian logistik</p>
  </div>
</div>
</div>

</div>    


<div class="footer bg-dark">
  <p>SHARELOG</p>
</div>

</body>
</html>