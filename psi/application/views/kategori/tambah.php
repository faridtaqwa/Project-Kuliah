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
				<form action="<?php base_url('kategori/kategori/tambah') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Jenis</label>
						<input class="form-control" type="text" name="jenisKategori"/>
					</div>
					<input type="submit" class="btn btn-primary" name="btn" value="Simpan" />
					<a class="btn btn-danger" href="<?php echo site_url('kategori/kategori') ?>">Kembali</a>
				</form>	
			</div>
			<?php $this->load->view("_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("_partials/js.php") ?>
</body>
</html>