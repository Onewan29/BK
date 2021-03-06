<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Data Siswa
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('siswa'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
            <a href="<?= base_url('cetak_siswa'); ?>" class="btn btn-outline-warning"><i class="fas fa-print"></i> </a>
        </div>
        <div class="card-header py-3">

            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <?php foreach ($siswa as $sw) : ?>
                        <tr>

                            <th width="200px">Nis</th>
                            <td><?php echo $sw->id_siswa ?></td>
                        </tr>
                        <tr>
                            <th>Nama Siswa</th>
                            <td><?php echo $sw->nama_siswa ?></td>
                        </tr>
                        <?php if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') { ?>

                            <tr>
                                <th>Password</th>
                                <td><?php echo $sw->password ?></td>
                            </tr>

                        <?php } ?>
                        <tr>
                            <th>Jurusan</th>
                            <td><?php echo $sw->nama_jurusan ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><?php echo $sw->Kelas ?></td>
                        </tr>
                        <tr>
                            <th>Nilai Rata-Rata Raport</th>
                            <td><?php echo $sw->nilai_raport ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo $sw->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo $sw->alamat ?></td>
                        </tr>
                        <tr>
                            <th>Nomor HP</th>
                            <td><?php echo $sw->nohp ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td><?php echo $sw->ttl ?></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td><?php echo $sw->tempat_lahir ?></td>
                        </tr>
                        <tr>
                            <th>Tinggal Dengan</th>
                            <td><?php echo $sw->tinggal ?></td>
                        </tr>
                        <tr>
                            <th>Hoby</th>
                            <td><?php echo $sw->hoby ?></td>
                        </tr>
                        <tr>
                            <th>Prestasi</th>
                            <td><?php echo $sw->prestasi ?></td>
                        </tr>
                        <tr>
                            <th>Cita-Cita</th>
                            <td><?php echo $sw->cita_cita ?></td>
                        </tr>
                        <tr>
                            <th>Nama Ayah</th>
                            <td><?php echo $sw->nama_ayah ?></td>
                        </tr>
                        <?php if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') { ?>


                            <tr>
                                <th>Password Orangtua</th>
                                <td><?php echo $sw->password_ortu ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>Nama Ibu</th>
                            <td><?php echo $sw->nama_ibu ?></td>
                        </tr>
                        <tr>
                            <th>Alamat Orangtua</th>
                            <td><?php echo $sw->alamat_ortu ?></td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ayah</th>
                            <td><?php echo $sw->pekerjaan_ayah ?></td>
                        </tr>
                        <tr>
                            <th>Pendidikan Ayah</th>
                            <td><?php echo $sw->pendidikan_ayah ?></td>
                        </tr>
                        <tr>
                            <th>Nomor HP Ayah</th>
                            <td><?php echo $sw->nohp_ayah ?></td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ibu</th>
                            <td><?php echo $sw->pekerjaan_ibu ?></td>
                        </tr>
                        <tr>
                            <th>Pendidikan Ibu</th>
                            <td><?php echo $sw->pendidikan_ibu ?></td>
                        </tr>
                        <tr>
                            <th>Nomor HP Ibu</th>
                            <td><?php echo $sw->nohp_ibu ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>