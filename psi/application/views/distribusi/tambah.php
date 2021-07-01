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
       
   <form action="<?php echo base_url(). 'index.php/distribusi/distribusi/proses_input'; ?>" method="post">
     <div class="form-group">
       <label for="nama">Nama Desa :</label>
       <input type="text" name="namaDesa" class="form-control" placeholder="Masukan Nama Desa" id="nama" required>
     </div>
     <div class="form-group">
       <label for="nama">Lokasi :</label>
       <input type="text" name="lokasi" class="form-control" placeholder="Masukan lokasi" id="nama" required>
     </div>
       <label for="nama">Nama Logistik :</label>
     <select name="id_logistik" class="form-control">
      <?php foreach($this->distribusi_model->getTable() as $data){ ?>
        <option value="<?php echo $data->id?>"><?php echo $data->namaLogistik ?></option>
      <?php } ?>
    </select>
     <div class="form-group">
       <label for="nama">Kuantitas :</label>
       <input type="text" name="stok_logistik" class="form-control" placeholder="Kuantitas yang ingin didistribusi" id="nama" required>
     </div>
     <div class="form-group">
       <label for="nama">Nama Pengirim :</label>
       <input type="text" name="namaPengirim" class="form-control" placeholder="Masukan Nama Pengirim" id="nama" required>
     </div>
     <div class="form-group">
       <label for="nama">Nama Penerima :</label>
       <input type="text" name="namaPenerima" class="form-control" placeholder="Masukan Nama Penerima" id="nama" required>
     </div>
     <div class="form-group">
       <label for="tgl">Tanggal Distribusi:</label>
       <input type="date" name="tgl_distribusi" class="form-control" id="tgl" placeholder="Masukan Tanggal Distribusi" required>
     </div>
    <input type="submit" class="btn btn-primary" name="btn" value="Simpan" />
    <a class="btn btn-danger" href="<?php echo site_url('distribusi/distribusi') ?>">Kembali</a>
      </div>
      <?php $this->load->view("_partials/footer.php") ?>
    </div>
  </div>
  <?php $this->load->view("_partials/js.php") ?>
</body>
</html>

