<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <img class="image" border="0" src="<?php echo base_url('assets/img/Admin.png') ?>" width="50px">
                <div class="sidebar-brand-text mx-3">SIPPBK</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('konsul/detailSiswa') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Konsultasi</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pelanggaran/detailPelanggaran') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Pelanggaran</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('siswa/siswaDetail') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Data Siswa</span></a>
                </li>
            <?php } ?>
            <!-- Nav Item - Tables -->
            <?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'user') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('konsul') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Konsultasi</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('perekapan') ?>">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Perekapan</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pelanggaran') ?>">
                        <i class="fas fa-balance-scale-left"></i>
                        <span>Pelanggaran</span></a>
                </li>
            <?php }
            if ($this->session->userdata('level') == 'wali kelas') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('konsul') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Konsultasi</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pelanggaran') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Pelanggaran</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('siswa') ?>">
                        <i class="fas fa-balance-scale"></i>
                        <span>Data Siswa</span></a>
                </li>
            <?php }
            if ($this->session->userdata('level') == 'admin') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('kategori') ?>">
                        <i class="fas fa-book-reader"></i>
                        <span>Kategori Pelanggaran</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('sanksi') ?>">
                        <i class="fas fa-gavel"></i>
                        <span>Sanksi</span></a>
                </li>
            <?php }
            if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'user') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('siswa') ?>">
                        <i class="fas fa-address-card"></i>
                        <span>Data Siswa</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('guru') ?>">
                        <i class="far fa-address-card"></i>
                        <span>Data Guru BK</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('wali_kelas') ?>">
                        <i class="far fa-address-card"></i>
                        <span>Data Wali Kelas</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('jurusan') ?>">
                        <i class="fas fa-book"></i>
                        <span>Kelas & Jurusan</span></a>
                </li>
            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="sidebar-brand-text mx-2">Sistem Perekapan Pelangaran Bimbingan Konseling SMA Darul Ulum Agung Malang</div>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('Username'); ?></span>

                                <i class="fas fa-user-circle"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('Auth/keluar') ?>">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar -->