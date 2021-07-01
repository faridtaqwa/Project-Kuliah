 <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('trc/dashboard') ?>">
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span>Halaman</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            
<h6 class="dropdown-header">Laporan</h6>
            <a class="dropdown-item" href="<?php echo site_url('laporan/laporan') ?>">Data Laporan</a>
            <a class="dropdown-item" href="<?php echo site_url('laporan/laporan/tambah') ?>">Tambah Laporan</a>
          </div>
        </li>
      </ul>


