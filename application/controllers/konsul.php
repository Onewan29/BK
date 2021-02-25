<?php

defined('BASEPATH') or exit('No direct script access allowed');

class konsul extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("Konsul_model");
        $this->load->model("siswa_model");
        $this->load->model("guru_model");
        $this->load->model("jurusan_model");
        // iki script wajib gae membatasi akses lewat jalur url 
        // siswa seng pinter iso iseng dan bakal jebol lek nggak mbok kek i iki
        // if ($this->session->userdata('level') == 'ortu' || $this->session->userdata('level') == 'siswa') {
        //     $this->session->sess_destroy();
        //     redirect('Auth');
        // }
    }


    public function index()
    {
        $data['siswa'] = $this->siswa_model->tampil_data()->result();
        $data['kelas'] = $this->jurusan_model->tampil_data()->result();
        $data['guru'] = $this->guru_model->tampil_data()->result();
        $data['perekapan'] = $this->Konsul_model->panggil_perekapan();
        $data['konsultasi'] = $this->Konsul_model->gabung();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('konsul', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_konsultasi'         => set_value('id_konsultasi'),
            'id_siswa'              => set_value('id_siswa'),
            'id_guru'                 => set_value('id_guru'),
            'id_KJ'                 => set_value('id_KJ'),
            'kelas'                 => set_value('kelas'),
            'nama_jurusan'                 => set_value('nama_jurusan'),
            'tanggal' => set_value('tanggal'),
            'catatan'            => set_value('catatan'),
            'id_perekapan'            => set_value('id_perekapan'),
        );
        $data['ws'] = $this->siswa_model->tampil_data()->result();
        $data['rg'] = $this->guru_model->tampil_data()->result();
        $data['kd'] = $this->jurusan_model->tampil_data()->result();
        $data['perekapan'] = $this->Konsul_model->panggil_perekapan();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('konsul_form', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {
        $id_perekapan = $this->input->post('id_perekapan');
        $id_siswa     = $this->input->post('id_siswa');
        $id_guru                  = $this->input->post('id_guru');
        $id_KJ                  = $this->input->post('id_KJ');
        $kelas                  = $this->input->post('kelas');
        $nama_jurusan                  = $this->input->post('nama_jurusan');
        $tanggal             = $this->input->post('tanggal');
        $catatan             = $this->input->post('catatan');
        $id_perekapan             = $this->input->post('id_perekapan');


        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_perekapan' => $id_perekapan,
                'id_siswa'    => $id_siswa,
                'id_guru'     => $id_guru,
                'id_KJ'     => $id_KJ,
                'kelas'     => $kelas,
                'nama_jurusan'     => $nama_jurusan,
                'tanggal' => $tanggal,
                'catatan'            => $catatan,
                'id_perekapan'            => $id_perekapan,


            );
            $this->Konsul_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('konsul');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('konsul');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('id_siswa', 'id_siswa', 'xss_clean|is_unique[konsultasi.id_siswa]');
        $this->form_validation->set_rules('id_guru', 'id_guru', 'xss_clean|is_unique[konsultasi.id_guru]');
        $this->form_validation->set_rules('id_KJ', 'id_KJ', 'xss_clean|is_unique[konsultasi.id_KJ]');
        $this->form_validation->set_rules('kelas', 'kelas', 'xss_clean|is_unique[konsultasi.kelas]');
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'xss_clean|is_unique[konsultasi.nama_jurusan]');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'xss_clean|is_unique[konsultasi.tanggal]');
        $this->form_validation->set_rules('catatan', 'catatan', 'xss_clean|is_unique[konsultasi.catatan]');
        $this->form_validation->set_rules('id_perekapan', 'id_perekapan', 'xss_clean|is_unique[konsultasi.id_perekapan]');
    }
    public function update($id)
    {
        $where = array('id_konsultasi' => $id);
        $data['konsultasi'] = $this->Konsul_model->edit_data(
            $where,
            'konsultasi'
        )->result();
        $data['ws'] = $this->siswa_model->tampil_data()->result();
        $data['rg'] = $this->guru_model->tampil_data()->result();
        $data['kd'] = $this->jurusan_model->tampil_data()->result();
        $data['perekapan'] = $this->Konsul_model->panggil_perekapan();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('konsul_update', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi()
    {
        $id_siswa = $this->input->post('id_siswa');
        $id_guru = $this->input->post('id_guru');
        $id_KJ = $this->input->post('id_KJ');
        $kelas = $this->input->post('kelas');
        $nama_jurusan = $this->input->post('nama_jurusan');
        $tanggal = $this->input->post('tanggal');
        $catatan = $this->input->post('catatan');
        $id_perekapan = $this->input->post('id_perekapan');

        $data = array(
            'id_siswa'    => $id_siswa,
            'id_guru'     => $id_guru,
            'id_KJ'     => $id_KJ,
            'kelas'     => $kelas,
            'nama_jurusan'     => $nama_jurusan,
            'tanggal' => $tanggal,
            'catatan'                 => $catatan,
            'id_perekapan'                 => $id_perekapan,
        );
        $where = array(
            'id_konsultasi' => $this->input->post('id_konsul')
        );
        $this->Konsul_model->update_data($where, $data, 'konsultasi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('konsul');
    }

    public function getDetail_update()
    {
        $dataKonsul = $this->Konsul_model->cari_gabung($this->input->post('id_konsul'));
        if ($dataKonsul != null) {
            $data['sukses'] = 'sukses';
            $data['id_konsul'] = $dataKonsul->id_konsultasi;
            $data['nis'] = $dataKonsul->id_siswa;
            $data['nip'] = $dataKonsul->id_guru;
            $data['kodeKelas'] = $dataKonsul->id_KJ;
            $data['namaKelas'] = $dataKonsul->kelas;
            $data['namaJurusan'] = $dataKonsul->nama_jurusan;
            $data['semester'] = $dataKonsul->id_perekapan;
            $data['tanggal'] = $dataKonsul->tanggal;
            $data['catatan'] = $dataKonsul->catatan;
        } else {
            $data['sukses'] = 'gagal';
        }
        echo json_encode($data);
    }

    public function delete($id)
    {
        // ndek kene dikek i if
        if ($this->session->userdata('level') == 'admin') {
            # code...
            $where = array('id_konsultasi' => $id);
            $this->Konsul_model->hapus_data($where, 'konsultasi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        }

        redirect('konsul');
    }
    public function info_konsul($id_konsultasi)
    {

        $data['konsultasi'] = $this->Konsul_model->gabung_sk($id_konsultasi);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('info_konsul', $data);
        $this->load->view('template/footer');
    }


    public function ajx_load()
    {
        $id_KJ = $this->input->get('id_KJ');
        if ($kj = $this->Konsul_model->autoload($id_KJ)) {
            $data = array(
                'nama_jurusan' => $kj->nama_jurusan,
                'kelas' => $kj->Kelas
            );
        } else {
            $data = null;
        }

        echo json_encode($data);
    }

    public function detailSiswa()
    {
        $data =  [
            'konsultasi' => $this->Konsul_model->tampil_data(['siswa.id_siswa' => $this->session->userdata('id_user')])->result()
        ];
        // print_r($data['konsultasi']);
        // die;
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('siswa_konsul_detail', $data);
        $this->load->view('template/footer');
    }
}
