<div class="container-fluid">
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggaran | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
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
                        <tr>
                            <th>Password Siswa</th>
                            <td><?php echo $sw->password ?></td>
                        </tr>
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
                        <tr>
                            <th>Password Orangtua</th>
                            <td><?php echo $sw->password_ortu ?></td>
                        </tr>
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