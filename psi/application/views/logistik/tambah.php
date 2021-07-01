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
				<form action="<?php echo site_url('logistik/logistik/simpanData') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Logistik</label>
						<input class="form-control" type="text" name="namaLogistik"  />
					</div>
					<div class="form-group">
						<label>Kuantitas</label>
						<input class="form-control" type="text" name="kuantitas"  />
					</div>
					<div class="form-group">
						<label>Tanggal Kedaluwarsa</label>
						<input class="form-control" type="date" name="tgl_kedaluwarsa"  />
					</div>
					<div class="form-group">
						<label>Kategori</label>
                        <select name="kategori" class="form-control">
            				<?php foreach ($kategori as $kategori): ?>
            				<option value="<?php echo $kategori->id_kategoris ?>"><?php echo $kategori->jenisKategori ?></option> <?php endforeach; ?>
       					</select>
					</div>
					<input type="submit" class="btn btn-primary" name="btn" value="Simpan" />
					<a class="btn btn-danger" href="<?php echo site_url('logistik/logistik') ?>">Kembali</a>
				</form>	
			</div>
			<?php $this->load->view("_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("_partials/js.php") ?>
</body>
</html>

	