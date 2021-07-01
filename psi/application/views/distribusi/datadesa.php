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
						<a href="<?php echo site_url('distribusi/distribusi') ?>" class="float-right"> Kembali ke Distribusi</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			
<thead>
		<th>Nomor</th>
		<th>Nama Desa</th>
		<th>Lokasi</th>
		<th>Logistik</th>
		<th>Stok yang dikirim</th>
	</thead>
	<tbody>
		<?php $i=1; foreach ($desa as $desa): ?>
			<tr>
				<td>
					<?php echo $i; $i++ ?>
				</td>
				<td>
					<?php echo $desa->namaDesa ?>
				</td>
				<td>
					<?php echo $desa->lokasi ?>
				</td>
				<td>
					<?php echo $desa->namaLogistik ?>
				</td>
				<td>
					<?php echo $desa->stok_logistik ?>
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
