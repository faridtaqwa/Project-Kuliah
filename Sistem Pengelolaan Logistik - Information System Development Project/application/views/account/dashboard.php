<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
  <?php $this->load->view("_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
           <h3>Dashboard</h3>           
          </div>
          <div class="card-body">
      <p>Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('email')); ?>!</p>
      <button type="button" class="btn btn-link "><?php echo anchor('logistik/logistik','Tambah data logistik')?></button>
      <button type="button" class="btn btn-link col-md-3"><?php echo anchor('kategori/kategori','Tambah kategori logistik')?></button>
      <button type="button" class="btn btn-link col-md-4"><?php echo anchor('distribusi/distribusi','Distribusi Logistik')?></button>
       <button type="button" class="btn btn-link "><?php echo anchor('pakar/pakar','Nilai Domain Sistem Pakar')?></button>


        </div>
      </div>
      <?php $this->load->view("_partials/footer.php") ?>
    </div>
  </div>
  <?php $this->load->view("_partials/js.php") ?>
</body>
</html>



 