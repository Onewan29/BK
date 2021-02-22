<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Jurusan

    </div>
    <form method="post" action="<?php echo base_url('jurusan/input_aksi') ?>">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('jurusan'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>

            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col">
                        <label>Kode</label>
                        <input required type="text" name="id_KJ" placeholder="Masukan Kode" class="form-control">
                        <?php echo form_error('id_KJ', ' <div class="text-danger small" ml-3> ') ?>
                    </div>

                    <div class="col">
                        <label>Nama jurusan</label>
                        <select required name="nama_jurusan" class="form-control">
                            <option>
                            <option>Ilmu Pengetahuan Alam</option>
                            <option>Ilmu Pengetahuan Sosial</option>
                        </select>
                        <?php echo form_error('nama_jurusan', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label>Nama kelas</label>
                        <select required name="kelas" class="form-control">
                            <option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                        <?php echo form_error('Kelas', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>

            </div>
            <div class="card-header py-3">
                <button type="submit" class="btn btn-outline-success">Simpan</button>
                <button type="reset" class="btn btn-outline-danger">Batal</button>
            </div>
        </div>

</div>

</form>
</div>