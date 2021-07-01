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
						<a href="<?php echo site_url('logistik/logistik/tambahData') ?>"><i class="fas fa-plus "></i> Tambah Logistik</a>
						<a href="<?php echo site_url('chart') ?> " class="col-md-3">Chart</a>
						<a href="<?php echo site_url('pusdalops/dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">

								<?php if($this->session->flashdata('msg_success')): ?>
												<div class="alert alert-success"><?php echo $this->session->flashdata('msg_success') ?>
												</div>
											<?php endif ?>
											<?php if ($this->session->flashdata('msg_error')): ?>
												<div class="alert alert-danger"><?php echo $this->session->flashdata('msg_error'); ?>
												</div>
											<?php endif ?>
									<thead>
										<th>Nomor</th>
										<th>Nama Logistik</th>
										<th>Kuantitas</th>
										<th>Kategori</th>
										<th>Tanggal Kedaluwarsa</th>
										<th>Opsi</th>
									</thead>
									<tbody>
										<?php $i=1; foreach ($logistik as $data): ?>
											<tr>
												<td>
													<?php echo $i; $i++ ?>
												</td>
												<td>
													<?php echo $data->namaLogistik; ?>
												</td>
												<td>
													<?php echo $data->kuantitas; ?>
												</td>
												<td>
													<?php echo $data->jenisKategori; ?>
												</td>
												<td>
													<?php echo $data->tgl_kedaluwarsa; ?>
												</td>
												<td>
												<a href="<?php echo site_url('logistik/logistik/edit/'.$data->id) ?>" class="btn btn-primary">Edit</a>
												<a href="<?php echo site_url('logistik/logistik/delete/'.$data->id) ?>" class="btn btn-danger">Hapus</a>
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