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
						<a href="<?php echo site_url('kategori/kategori/tambah') ?>"><i class="fas fa-plus"></i> Tambah Kategori</a>
						<a href="<?php echo site_url('pusdalops/dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<th>Nomor</th>
									<th>Jenis Kategori</th>
								</thead>
								<tbody>
										<?php $i=1; foreach ($kategori as $kategori): ?>
											<tr>
												<td>
													<?php echo $i; $i++ ?>
												</td>
												<td>
													<?php echo $kategori->jenisKategori ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>	
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("_partials/js.php") ?>
</body>
</html>