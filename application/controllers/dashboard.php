<?php
class dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("siswa_model");
        $this->load->model("konsul_model");
        $this->load->model("pelanggaran_model");
        $this->load->library('session');
    }

    public function index()
    {
        // $data['tabel_user'] = $this->user_model->tampil_data($this->session->userdata('Username'));
        $data['tabel_user'] = $this->user_model->tampil_semua_data()->result();
        $data['siswa'] = $this->siswa_model->tampil_data()->result();

        if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') {
            $data['siswa'] = $this->siswa_model->tampil_data(['siswa.id_siswa' => $this->session->userdata('id_user')])->result();
        }
        $data['konsultasi'] = $this->konsul_model->tampil_data()->result();
        if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') {
            $data['konsultasi'] = $this->konsul_model->tampil_data(['siswa.id_siswa' => $this->session->userdata('id_user')])->result();
        }
        $data['pelanggaran'] = $this->pelanggaran_model->tampil_data()->result();
        if ($this->session->userdata('level') == 'siswa' || $this->session->userdata('level') == 'ortu') {
            $data['pelanggaran'] = $this->pelanggaran_model->tampil_data(['siswa.id_siswa' => $this->session->userdata('id_user')])->result();
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}
