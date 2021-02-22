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

    $('#editmodal').on('show.bs.modal', function(event) {
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
                // console.log(JSON.parse(data));
                // modal.find('.modal-body #datapelanggaran').html(JSON.parse(data));
            }
        });
    })
</script>