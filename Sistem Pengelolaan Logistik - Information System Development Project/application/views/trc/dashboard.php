<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
  <?php $this->load->view("_partials/navbar_trc.php") ?>
  <div id="wrapper">
    <?php $this->load->view("_partials/sidebar_trc.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
           <h3>Dashboard</h3>           
          </div>
          <div class="card-body">
      <p>Selamat datang di halaman dashboard, tim <?php echo ucfirst($this->session->userdata('username')); ?>!</p>
      <button type="button" class="btn btn-link col-md-3"><?php echo anchor('laporan/laporan','Lihat laporan bencana')?></button>


        </div>
      </div>
      <?php $this->load->view("_partials/footer.php") ?>
    </div>
  </div>
  <?php $this->load->view("_partials/js.php") ?>
</body>
</html>



 