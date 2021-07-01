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
						<a href="<?php echo site_url('laporan/laporan/tambah') ?>"><i class="fas fa-plus"></i> Lapor Bencana</a>
						<a href="<?php echo site_url('trc/chart') ?> " class="col-md-3">Chart</a>
						<a href="<?php echo site_url('trc/dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<th>Nomor</th>
									<th>Jenis Bencana</th>
									<th>Tempat Bencana</th>
									<th>Logistik Diperlukan</th>
									<th>Tingkat Kerusakan</th>
									<th>Jumlah Korban</th>
									<th>Prioritas Distribusi</th>
									<th></th>
								</thead>
								<tbody>
									<?php $i=1; foreach ($laporan as $laporan): ?>
									<tr>
										<td><?php echo $i; $i++ ?></td>
										<td><?php echo $laporan->jenis ?></td>
										<td>Kabupaten <?php echo $laporan->kabupaten ?>, Kecamatan <?php echo $laporan->kecamatan ?>, Desa <?php echo $laporan->desa ?></td>
										<td><?php echo $laporan->logistik_diperlukan ?></td>
										<td><?php echo $laporan->tingkatKerusakan ?>%</td>
										<td><?php echo $laporan->jumlahKorban ?></td>
										<td><?php echo $laporan->prioritas ?></td>
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