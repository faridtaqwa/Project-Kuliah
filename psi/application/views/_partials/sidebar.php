 <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('pusdalops/dashboard') ?>">
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span>Halaman</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Logistik</h6>
            <a class="dropdown-item" href="<?php echo site_url('logistik/logistik') ?>">Data Logistik</a>
            <a class="dropdown-item" href="<?php echo site_url('logistik/logistik/tambahData') ?>">Tambah Logistik</a>
            <h6 class="dropdown-header">Kategori</h6>
            <a class="dropdown-item" href="<?php echo site_url('kategori/kategori') ?>">Daftar Kategori</a>
            <a class="dropdown-item" href="<?php echo site_url('kategori/kategori/tambah') ?>">Tambah Kategori</a>
            <h6 class="dropdown-header">Distribusi</h6>
            <a class="dropdown-item" href="<?php echo site_url('distribusi/distribusi') ?>">Data Pendistribusian</a>
            <a class="dropdown-item" href="<?php echo site_url('distribusi/distribusi/input') ?>">Distribusikan Logistik</a>
          </div>
        </li>
      </ul>
