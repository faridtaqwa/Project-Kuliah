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
				<form action="<?php base_url('laporan/laporan/tambah') ?>" method="post" enctype="multipart/form-data">
					<div class="row">
  						<div class="col-sm" style="padding-top: 10px; padding-bottom: 10px; font-weight: bolder;">Data Bencana</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<div class="form-group">
								<label>nama tim</label>
                        		<select name="id_trc" class="form-control">
            					<?php foreach ($trc as $trc): ?>
            					<option value="<?php echo $trc->id ?>"><?php echo $trc->nama ?></option> <?php endforeach; ?>
       							</select>
							</div>
						</div>
						<div class="col-sm">
							<div class="form-group">
								<label>Jenis</label>
								<input class="form-control" type="text" name="jenis"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label>Jumlah Korban</label>
								<input class="form-control" type="number" min="10" max="10000" name="jumlahKorban"/>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label>Tingkat Kerusakan</label>
								<input class="form-control" type="number" min="1" max="100" name="tingkatKerusakan"/>
							</div>
						</div>
					</div>
					<div class="row">
  						<div class="col-sm" style="padding-top: 10px; padding-bottom: 10px; font-weight: bolder;">Alamat Bencana</div>
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label>Kecamatan</label>
								<input class="form-control" type="text" name="kecamatan"/>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label>Desa</label>
								<input class="form-control" type="text" name="desa"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label>Kodepos</label>
								<input class="form-control" type="text" name="kodepos"/>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label>Kabupaten</label>
								<input class="form-control" type="text" name="kabupaten"/>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label>Logistik Diperlukan</label>
								<textarea class="form-control" type="text" name="logistik_diperlukan"></textarea>
							</div>	
						</div>
					</div>
					<div class="row">
						<input type="submit" class="btn btn-primary" name="btn" value="Simpan" />
					    	<a class="btn btn-danger" href="<?php echo site_url('laporan/laporan') ?>">Kembali</a>
					</div>
				</form>	
			</div>
			<?php $this->load->view("_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("_partials/js.php") ?>
</body>
</html>
