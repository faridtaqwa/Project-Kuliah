<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
    <script src="<?php echo base_url('chartjs/Chart.bundle.js') ?>"></script>
        <script src="<?php echo base_url('chartjs/Chart.js') ?>"></script>
<?php
        foreach($kriteria as $data){
            $kriteria[] = $data->prioritas;
            $jumlah[] = (float) $data->jumlah;
        }
    ?>

</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("_partials/sidebar.php") ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <a href="<?php echo site_url('trc/Dashboard') ?>" class="float-right"> Kembali ke Dashboard</a>
                <canvas id="demobar"></canvas>
                <br>
            </div>
            <?php $this->load->view("_partials/footer.php") ?>
        </div>
    </div> 
    <?php $this->load->view("_partials/js.php") ?>
</body>
  <script  type="text/javascript">

        var ctx = document.getElementById("demobar").getContext("2d");
        var data = {
                  labels: <?php echo json_encode($kriteria);?>,
                  datasets: [
                  {
                    label: "Penjualan Smartphone",
                    data: <?php echo json_encode($jumlah);?>,
                    backgroundColor: [
                      "rgba(59, 100, 222, 1)",
                      "rgba(203, 222, 225, 0.9)",
                      "rgba(102, 50, 179, 1)",
                      "rgba(201, 29, 29, 1)",
                      "rgba(81, 230, 153, 1)",
                      "rgba(246, 34, 19, 1)"]
                  }
                  ]
                  };

        var myBarChart = new Chart(ctx, {
                  type: 'pie',
                  data: data,
                  options: {
                    responsive: true
                }
              });
      </script>
</html>