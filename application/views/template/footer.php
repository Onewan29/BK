<!-- Footer -->



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- End of Footer -->
</body>


<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>


<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/sweet/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/sweet/myscript.js"></script>
<script>
    $('#id_KJ_update').change(function() {
        let kelas = $('#id_KJ_update option:selected').data('kelas');
        let jurusan = $('#id_KJ_update option:selected').data('jurusan');
        $('#nama_jurusan_update').val(jurusan);
        $('#Kelas_update').val(kelas);
    });

    $('#id_KJ').change(function() {
        let kelas = $('#id_KJ option:selected').data('kelas');
        let jurusan = $('#id_KJ option:selected').data('jurusan');
        $('#nama_jurusan').val(jurusan);
        $('#Kelas').val(kelas);
    });

    // function isi_otomatis_update() {
    //     var id_KJ_update = $("#id_KJ_update").val();
    //     $.ajax({
    //         url: '<?= base_url('pelanggaran/ajx_load_update') ?>',
    //         data: "id_KJ_update=" + id_KJ_update,
    //         success: function(data) {
    //             obj = JSON.parse(data);
    //             $('#nama_jurusan_update').val(obj.nama_jurusan_update);
    //             $('#Kelas_update').val(obj.kelas_update);
    //         },

    //     });
    // }

    function isi_otomatis() {
        var id_KJ = $("#id_KJ").val();
        $.ajax({
            url: '<?= base_url('siswa/ajx_load') ?>',
            data: "id_KJ=" + id_KJ,
            success: function(data) {
                obj = JSON.parse(data);
                $('#nama_jurusan').val(obj.nama_jurusan);
                $('#Kelas').val(obj.kelas);
            },

        });
    }
</script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('.form-checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('#show').attr('type', 'text');
                $('#show1').attr('type', 'text');
            } else {
                $('#show').attr('type', 'password');
                $('#show1').attr('type', 'password');
            }
        });
    });

    $(document).ready(function() {
        $('.form-checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('#show_update').attr('type', 'text');
                $('#show1_update').attr('type', 'text');
            } else {
                $('#show_update').attr('type', 'password');
                $('#show1_update').attr('type', 'password');
            }
        });
    });
    $(document).ready(function() {
        $('.form-checkbox').click(function() {
            if ($(this).is(':checked')) {
                $('#show_user').attr('type', 'text');
                $('#show1_user').attr('type', 'text');
            } else {
                $('#show_user').attr('type', 'password');
                $('#show1_user').attr('type', 'password');
            }
        });
    });



    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var perekapan = button.data('kp') // Extract info from data-* attributes
        var nis = "<?= $this->session->userdata('id_user') ?>" // Extract info from data-* attributes
        var modal = $(this)
        $.ajax({
            type: "POST",
            data: {
                nis: nis,
                id_perekapan: perekapan
            },
            url: "<?= base_url('pelanggaran/getDataPelanggaran') ?>",
            success: function(data) {
                // console.log(JSON.parse(data));
                modal.find('.modal-body #datapelanggaran').html(JSON.parse(data));
            }
        });
    })

    $('#kelas_modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var nis = button.data('siswa') // Extract info from data-* attributes
        var modal = $(this)
        $.ajax({
            type: "POST",
            data: {
                nis: nis,
            },
            url: "<?= base_url('siswa/getKelas') ?>",
            success: function(res) {
                var data = JSON.parse(res);
                modal.find('.modal-body #tabel_histori').html(data.html);
                modal.find('.modal-body #nis_kelas').val(nis);
                modal.find('.modal-body #btn_kelulusan').removeClass();
                modal.find('.modal-body #tahun_lulus').removeAttr('disabled');
                modal.find('.modal-body #btn_kelulusan').addClass('btn mt-2 btn-primary');
                modal.find('.modal-body #btn_kelulusan').text('Lulus');
                if (data.tahun_lulus != '') {
                    modal.find('.modal-body #tahun_lulus').val(data.tahun_lulus);
                    modal.find('.modal-body #tahun_lulus').attr('disabled', 'true');
                    modal.find('.modal-body #btn_kelulusan').addClass('btn mt-2 btn-danger');
                    modal.find('.modal-body #btn_kelulusan').text('Hapus');
                }
            }
        });
    });

    // function btn_edit_kelas(id, kelas, tahun_ajar) {
    //     $('#id_histori').val(id);
    //     $('#id_KJ').val(kelas);
    //     $('#tahun_ajaran').val(tahun_ajar);
    // }

    $('#tabel_histori').on('click', 'button.btn_edit_kelas', function(params) {
        $('#id_histori').val($(this).data('idhistori'));
        $('#id_kelas').val($(this).data('kelas'));
        $('#tahun_ajaran').val($(this).data('tahunajar'));
        $('#btn_simpan_kelas').text('update');
    });

    // edit modal konsultasi
    $('#editmodalkonsultasi').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var konsul = button.data('konsul') // Extract info from data-* attributes
        var modal = $(this)
        $.ajax({
            type: "POST",
            data: {
                id_konsul: konsul
            },
            url: "<?= base_url('konsul/getDetail_update') ?>",
            success: function(data) {
                var datakonsultasi = JSON.parse(data);
                set_option_kelas(datakonsultasi.nis, '#editmodalkonsultasi #id_kj_update', datakonsultasi.kodeKelas);
                modal.find('.modal-body #id_konsul').val(datakonsultasi.id_konsul);
                modal.find('.modal-body #id_siswa').val(datakonsultasi.nis);
                modal.find('.modal-body #id_guru').val(datakonsultasi.nip);
                modal.find('.modal-body #id_kj_update').val(datakonsultasi.kodeKelas);
                modal.find('.modal-body #Kelas_update').val(datakonsultasi.namaKelas);
                modal.find('.modal-body #nama_jurusan_update').val(datakonsultasi.namaJurusan);
                modal.find('.modal-body #id_perekapan').val(datakonsultasi.semester);
                modal.find('.modal-body #tanggal').val(datakonsultasi.tanggal);
                modal.find('.modal-body #catatan').val(datakonsultasi.catatan);
            }
        });
    })

    $('#editmodalpelanggaran').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var pelanggaran = button.data('pelanggaran') // Extract info from data-* attributes
        var modal = $(this);
        $.ajax({
            type: "POST",
            data: {
                id_pelanggaran: pelanggaran
            },
            dataType: "JSON",
            url: "<?= base_url('pelanggaran/getDetail_update') ?>",
            success: function(data) {
                modal.find('.modal-body #id_siswa').val(data.nis);
                set_option_kelas(data.nis, '#editmodalpelanggaran #id_kj_update', data.kode_kelas);
                modal.find('.modal-body #id_pelanggaran').val(data.id_pelanggaran);
                // modal.find('.modal-body #id_kj_update').val(data.kode_kelas);
                modal.find('.modal-body #Kelas_update').val(data.kelas);
                modal.find('.modal-body #nama_jurusan_update').val(data.jurusan);
                modal.find('.modal-body #id_guru').val(data.nip);
                modal.find('.modal-body #id_kp').val(data.kategori);
                modal.find('.modal-body #id_perekapan').val(data.kodePerekapan);
                modal.find('.modal-body #tanggal').val(data.tanggal);
                modal.find('.modal-body #catatan').val(data.catatan);
            }
        })
    });

    $('#exampleModal #nis_siswa').change(function() {
        let nis = $("#exampleModal #nis_siswa option:selected").val();
        set_option_kelas(nis, '#exampleModal #id_KJ', null);
    });

    function set_option_kelas(nis, option, id_kelas) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('histori_kelas/opt_HistoriKelas') ?>",
            data: {
                nis: nis,
                id_kelas: id_kelas
            },
            dataType: "JSON",
            success: function(e) {
                $(option).html(e);
            }
        });
    }
</script>