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
				<form action="<?php echo site_url('pakar/pakar/Update') ?>" method="post">
					<div class="form-group">
						<input class="form-control" type="hidden" name="id" value=" <?php echo $pakar->id ?> "/>
					</div>
					<div class="form-group">
						<label>Domain Min</label>
						<input class="form-control" type="number" name="min" value="<?php echo $pakar->min; ?>" />
					</div>
					<div class="form-group">
						<label>Domain Max</label>
						<input class="form-control" type="number" name="max" value="<?php echo $pakar->max; ?>" />
					</div>
					
					<input type="submit" class="btn btn-primary" name="btn" value="Simpan" />
					<a class="btn btn-danger" href="<?php echo site_url('pakar/pakar') ?>">Kembali</a>
				</form>	
			</div>
			<?php $this->load->view("_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("_partials/js.php") ?>
</body>
</html>