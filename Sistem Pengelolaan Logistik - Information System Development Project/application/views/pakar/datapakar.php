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
						<p style="font-weight: bolder;">Ubah Nilai Domain</p>
						<a href="<?php echo site_url('pusdalops/dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
					</div>
					<div class="card-body">
						<div class="">
							<table class="table"  width="100%" cellspacing="0">
								<thead>
									<th>No</th>
									<th>Variabel</th>
									<th>Himpunan</th>
									<th>Domain Min</th>
									<th>Domain Max</th>
									<th>Aksi</th>
								</thead>
								<tbody>
										<?php $i=1; foreach ($pakar as $pakar): ?>
											<tr>
												<td>
													<?php echo $i; $i++ ?>
												</td>
												<td>
													<?php echo $pakar->nama ?>
												</td>
												<td>
													<?php echo $pakar->himpunan1 ?> dan <?php echo $pakar->hiimpunan2 ?>
												</td>
												<td>
													<?php echo $pakar->min ?>
												</td>
												<td>
													<?php echo $pakar->max ?>
												</td>
												<td>
													<a href="<?php echo site_url('pakar/pakar/edit/'.$pakar->id) ?>" class="btn btn-primary">Edit</a>
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