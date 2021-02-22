<?php
defined('BASEPATH') or exit('No direct script access allowed');
class wali_kelas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("wali_kelas_model");
        $this->load->model("jurusan_model");
    }


    public function index()
    {

        $data['kelas'] = $this->jurusan_model->tampil_data()->result();
        $data['tabel_walikelas'] = $this->wali_kelas_model->gabung();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('wali_kelas', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_walikelas'      => set_value('id_walikelas'),
            'nip'    => set_value('nip'),
            'nama_walikelas'       => set_value('nama_walikelas'),
            'id_KJ'    => set_value('id_KJ'),
            'password'       => set_value('password'),


        );
        $data['jk'] = $this->jurusan_model->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('wali_kelas', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {

        $id_walikelas     = $this->input->post('id_walikelas');
        $nip   = $this->input->post('nip');
        $nama_walikelas      = $this->input->post('nama_walikelas');
        $id_KJ      = $this->input->post('id_KJ');
        $password      = $this->input->post('password');



        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_walikelas'      => $id_walikelas,
                'nip'    => $nip,
                'nama_walikelas'       => $nama_walikelas,
                'id_KJ'       => $id_KJ,
                'password'       => $password

            );
            $this->wali_kelas_model->input_data($data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('wali_kelas');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('wali_kelas');
        }
    }
    public function _rules()
    {

        $this->form_validation->set_rules('id_walikelas', 'id_walikelas', 'xss_clean|is_unique[tabel_walikelas.id_walikelas]');
        $this->form_validation->set_rules('nip', 'nip', 'xss_clean|is_unique[tabel_walikelas.nip]');
        $this->form_validation->set_rules('nama_walikelas', 'nama_walikelas', 'xss_clean|is_unique[tabel_walikelas.nama_walikelas]');
        $this->form_validation->set_rules('id_KJ', 'id_KJ', 'xss_clean|is_unique[tabel_walikelas.id_KJ]');
        $this->form_validation->set_rules('password', 'password', 'xss_clean|is_unique[tabel_walikelas.password]');
    }
    public function update($id)
    {
        $where = array('id_walikelas' => $id);
        $data['wali_kelas'] = $this->wali_kelas_model->edit_data(
            $where,
            'tabel_walikelas'
        )->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('wali_kelas', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi($id)
    {
        // $id = $this->input->post('id_sanksi');
        $nip = $this->input->post('nip');
        $nama_walikelas = $this->input->post('nama_walikelas');
        $id_KJ = $this->input->post('id_KJ');
        $password = $this->input->post('password');

        $data = array(
            'nip'    => $nip,
            'nama_walikelas'  => $nama_walikelas,
            'id_KJ'     => $id_KJ,
            'password'     => $password


        );
        $where = array(
            'id_walikelas' => $id
        );
        $this->wali_kelas_model->update_data($where, $data, 'tabel_walikelas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('wali_kelas');
    }
    public function delete($id)
    {
        $where = array('id_walikelas' => $id);
        $this->wali_kelas_model->hapus_data($where, 'tabel_walikelas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('wali_kelas');
    }
}
