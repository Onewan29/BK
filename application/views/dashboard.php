<div class="container-fluid">
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>

    <div class="row">
        <?php if ($this->session->userdata('level') == 'admin') { ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($konsultasi as $kl) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Konsultasi</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Konsultasi</div>
                                        <a href="<?= base_url('konsul'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale fa-3x text-gray-300"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($siswa as $sw) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Siswa</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Siswa </div>
                                        <a href="<?= base_url('siswa'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-card fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($pelanggaran as $pn) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pelanggaran</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Pelanggaran </div>
                                        <a href="<?= base_url('pelanggaran'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale-left fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">

                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data USER</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($tabel_user) ?> USER </div>
                                        <a href="<?= base_url('user'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">

                                <i class="fas fas fa-users fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <?php if ($this->session->userdata('level') == 'user') { ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($konsultasi as $kl) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Konsultasi</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Konsultasi</div>
                                        <a href="<?= base_url('konsul'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale fa-3x text-gray-300"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($siswa as $sw) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Siswa</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Siswa </div>
                                        <a href="<?= base_url('siswa'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-card fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($pelanggaran as $pn) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pelanggaran</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Pelanggaran </div>
                                        <a href="<?= base_url('pelanggaran'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale-left fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <?php if ($this->session->userdata('level') == 'wali kelas') { ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($konsultasi as $kl) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Konsultasi</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Konsultasi</div>
                                        <a href="<?= base_url('konsul'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale fa-3x text-gray-300"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($siswa as $sw) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Siswa</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Siswa </div>
                                        <a href="<?= base_url('siswa'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-card fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($pelanggaran as $pn) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pelanggaran</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Pelanggaran </div>
                                        <a href="<?= base_url('pelanggaran'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale-left fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <?php if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') { ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($konsultasi as $kl) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Konsultasi</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Konsultasi</div>
                                        <a href="<?= base_url('konsul/detailSiswa'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale fa-3x text-gray-300"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php

                                foreach ($siswa as $sw) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Siswa</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">

                                        <a href="<?= base_url('siswa/SiswaDetail'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-card fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <?php
                                $raw = 0;
                                foreach ($pelanggaran as $pn) :
                                    $raw++;
                                endforeach;
                                ?>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pelanggaran</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $raw; ?> Pelanggaran </div>
                                        <a href="<?= base_url('pelanggaran/detailPelanggaran'); ?>" class="small-box-footer">informasi <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-balance-scale-left fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        <?php } ?>

    </div>
</div>