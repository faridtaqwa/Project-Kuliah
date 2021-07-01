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
						<a href="<?php echo site_url('distribusi/distribusi/input') ?>"><i class="fas fa-plus"></i> Distribusi Logistik</a>
						<a href="<?php echo site_url('distribusi/distribusi/desa') ?> " class="col-md-6">Tabel Desa</a>
						<a href="<?php echo site_url('pusdalops/dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
<thead>
		<th>Nomor</th>
		<th>Nama Pengirim</th>
		<th>Nama Penerima</th>
		<th>Tanggal Distribusi</th>
	</thead>
	<tbody>
		<?php $i=1; foreach ($distribusi as $distribusi): ?>
			<tr>
				<td>
					<?php echo $i; $i++ ?>
				</td>
				<td>
					<?php echo $distribusi->namaPengirim ?>
				</td>
				<td>
					<?php echo $distribusi->namaPenerima ?>
				</td>
				<td>
					<?php echo $distribusi->tgl_distribusi ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>							
							</table>
					</div>
				</div>
			</div>
			<?php $this->load->view("_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("_partials/js.php") ?>
</body>
</html>
