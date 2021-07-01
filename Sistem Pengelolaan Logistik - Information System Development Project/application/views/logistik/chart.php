<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
    <script src="<?php echo base_url('chartjs/Chart.bundle.js') ?>"></script>
<?php
        foreach($report as $data){
            $merk[] = $data->jenisKategori;
            $stok[] = (float) $data->tot_kuantitas;
        }
    ?>

</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("_partials/sidebar.php") ?>
        <div id="content-wrapper">
            <div class="container-fluid">
              <h3 class="text-center">Jumlah Logistik Tersedia Berdasarkan Kategori</h3>
                <a href="<?php echo site_url('trc/Dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
                <canvas id="kategoriChart"></canvas>
                <br>
            </div>
            <?php $this->load->view("_partials/footer.php") ?>
        </div>
    </div> 
    <?php $this->load->view("_partials/js.php") ?>
</body>

<script type="text/javascript">
    var kategoriCanvas = document.getElementById("kategoriChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var kuantitas = {
  label: 'Kuantitas',
  data: <?php echo json_encode($stok);?>,
  backgroundColor: 'blue',
  borderWidth: 0,
  yAxisID: "y-axis-kategori"
};

var bulan = {
  labels: <?php echo json_encode($merk);?>,
  datasets: [kuantitas]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 0.5,
      categoryPercentage: 0.5
    }],
    yAxes: [{
      id: "y-axis-kategori"
    }]
  }
};

var barChart = new Chart(kategoriCanvas, {
  type: 'bar',
  data: bulan,
  options: chartOptions
});
</script>
</html>