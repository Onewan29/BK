<div class="container-fluid">
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                Tambah Data
            </button>
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori Pelanggaran | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-header py-3">



            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                PAKAIAN SERAGAM
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">

                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "PAKAIAN SERAGAM") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>



                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                RAMBUT, KUKU, TATO, MAKE-UP
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">

                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "RAMBUT, KUKU, TATO, MAKE-UP") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>



                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                MASUK DAN PULANG SEKOLAH
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "MASUK DAN PULANG SEKOLAH") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN
                            </button>
                        </h2>
                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                SOPAN SANTUN/PERGAULAN
                            </button>
                        </h2>
                    </div>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "SOPAN SANTUN/PERGAULAN") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header" id="headingsix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                UPACARA BENDERA DAN PERINGATAN HARI BESAR
                            </button>
                        </h2>
                    </div>

                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "UPACARA BENDERA DAN PERINGATAN HARI BESAR") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header" id="headingseven">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                KEGIATAN KEAGAMAAN
                            </button>
                        </h2>
                    </div>

                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "KEGIATAN KEAGAMAAN") { ?>
                                        <tr>
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header" id="headingeight">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                LARANGAN-LARANGAN
                            </button>
                        </h2>
                    </div>

                    <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Bentuk Pelanggaran</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kp as $krs) :
                                    if ($krs->tatib == "LARANGAN-LARANGAN") { ?>
                                        <tr>
                                            <!-- (int)substr($po->id_kp, 0); -->
                                            <td width="20px"><?php echo $no++ ?></td>
                                            <td><?php echo $krs->id_kp ?></td>
                                            <td><?php echo $krs->bentuk_pelanggaran ?></td>
                                            <td><?php echo $krs->bobot ?></td>
                                            <td><?php echo $krs->keterangan ?></td>
                                            <td width="20px"><?php echo anchor('kategori/update/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div> ') ?>

                                            <td width="20px"><?php echo anchor('kategori/delete/' . $krs->id_kp, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ') ?>
                                            </td>
                                        </tr>

                                    <?php    } ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Kategori Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('kategori/input_aksi'); ?>
                <div class="form-group">
                    <label>Kode Kategori</label>
                    <input required type="text" name="id_kp" class="form-control">


                    <label>Nama Tatib</label>
                    <select required name="tatib" class="form-control">
                        <option value="">-- Pilih Tatib </option>
                        <option>PAKAIAN SERAGAM</option>
                        <option>RAMBUT, KUKU, TATO, MAKE-UP</option>
                        <option>MASUK DAN PULANG SEKOLAH</option>
                        <option>KEBERSIHAN, KEDISIPLINAN, KETERTIBAN, KEHADIRAN</option>
                        <option>SOPAN SANTUN/PERGAULAN</option>
                        <option>UPACARA BENDERA DAN PERINGATAN HARI BESAR</option>
                        <option>KEGIATAN KEAGAMAAN</option>
                        <option>LARANGAN-LARANGAN</option>
                    </select>

                    <label>Bentuk Pelanggaran</label>
                    <input type="text" name="bentuk_pelanggaran" class="form-control">


                    <label>Bobot</label>
                    <input type="number" name="bobot" class="form-control">


                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">




                </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-danger">Batal</button>
                <button type="submit" class="btn btn-outline-success">Simpan</button>

            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>