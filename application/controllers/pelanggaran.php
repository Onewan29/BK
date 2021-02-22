<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pelanggaran extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("pelanggaran_model");
    $this->load->model("siswa_model");
    $this->load->model("guru_model");
    $this->load->model("kategori_model");
    $this->load->model("jurusan_model");
    $this->load->model("perekapan_model");
    $this->load->model("sanksi_model");
    // if ($this->session->userdata('level') == 'ortu' || $this->session->userdata('level') == 'siswa') {
    // $this->session->sess_destroy();
    //redirect('Auth');
    //}
  }


  public function index()
  {
    $data['siswa'] = $this->siswa_model->tampil_data()->result();
    $data['guru'] = $this->guru_model->tampil_data()->result();
    $data['kategori'] = $this->kategori_model->tampil_data()->result();
    $data['perekapan'] = $this->perekapan_model->tampil_data()->result();
    $data['pelanggaran'] = $this->pelanggaran_model->gabung()->result();
    $data['pr'] = $this->pelanggaran_model->getall()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pelanggaran', $data);
    $this->load->view('template/footer');
  }
  public function input()
  {

    $data = array(
      'id_pelanggaran'      => set_value('id_pelanggaran'),
      'id_siswa'    => set_value('id_siswa'),
      'id_guru' => set_value('id_guru'),
      'id_kp'       => set_value('id_kp'),
      'id_perekapan'     => set_value('id_perekapan'),
      'id_KJ'     => set_value('id_KJ'),
      'kelas'     => set_value('kelas'),
      'nama_jurusan'     => set_value('nama_jurusan'),
      'tanggal'     => set_value('tanggal'),
      'catatan'    => set_value('catatan'),

    );

    $data['ws'] = $this->siswa_model->tampil_data()->result();
    $data['rg'] = $this->guru_model->tampil_data()->result();
    $data['pk'] = $this->kategori_model->tampil_data()->result();
    $data['kd'] = $this->jurusan_model->tampil_data()->result();
    $data['tr'] = $this->perekapan_model->tampil_data()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pelanggaran', $data);
    $this->load->view('template/footer');
  }
  public function input_aksi()
  {
    $id_pelanggaran     = $this->input->post('id_pelanggaran');
    $id_siswa   = $this->input->post('id_siswa');
    $id_guru   = $this->input->post('id_guru');
    $id_kp      = $this->input->post('id_kp');
    $id_perekapan    = $this->input->post('id_perekapan');
    $id_KJ    = $this->input->post('id_KJ');
    $kelas    = $this->input->post('kelas');
    $nama_jurusan    = $this->input->post('nama_jurusan');
    $tanggal    = $this->input->post('tanggal');
    $catatan   = $this->input->post('catatan');


    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $data = array(

        'id_pelanggaran'      => $id_pelanggaran,
        'id_siswa'    => $id_siswa,
        'id_guru'    => $id_guru,
        'id_kp'       => $id_kp,
        'id_perekapan'     => $id_perekapan,
        'id_KJ'     => $id_KJ,
        'kelas'     => $kelas,
        'nama_jurusan'     => $nama_jurusan,
        'tanggal'     => $tanggal,
        'catatan'    => $catatan

      );
      $this->pelanggaran_model->input_data($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('pelanggaran');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('pelanggaran');
    }
  }
  public function _rules()
  {

    $this->form_validation->set_rules('id_pelanggaran', 'id_pelanggaran', 'xss_clean|is_unique[pelanggaran.id_pelanggaran]');
    $this->form_validation->set_rules('id_siswa', 'id_siswa', 'xss_clean|is_unique[pelanggaran.id_siswa]');
    $this->form_validation->set_rules('id_guru', 'id_guru', 'xss_clean|is_unique[pelanggaran.id_guru]');
    $this->form_validation->set_rules('id_kp', 'id_kp', 'xss_clean|is_unique[pelanggaran.id_kp]');
    $this->form_validation->set_rules('id_perekapan', 'id_perekapan', 'xss_clean|is_unique[pelanggaran.id_perekapan]');
    $this->form_validation->set_rules('id_KJ', 'id_KJ', 'xss_clean|is_unique[pelanggaran.id_KJ]');
    $this->form_validation->set_rules('kelas', 'kelas', 'xss_clean|is_unique[pelanggaran.kelas]');
    $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'xss_clean|is_unique[pelanggaran.nama_jurusan]');
    $this->form_validation->set_rules('tanggal', 'tanggal', 'xss_clean|is_unique[pelanggaran.tanggal]');
    $this->form_validation->set_rules('catatan', 'catatan', 'xss_clean|is_unique[pelanggaran.catatan]');
  }
  public function update($id)
  {
    $where = array('id_pelanggaran' => $id);
    $data['pelanggaran'] = $this->pelanggaran_model->edit_data(
      $where,
      'pelanggaran'
    )->result();
    $data['ws'] = $this->siswa_model->tampil_data()->result();
    $data['rg'] = $this->guru_model->tampil_data()->result();
    $data['pk'] = $this->kategori_model->tampil_data()->result();
    $data['kd'] = $this->jurusan_model->tampil_data()->result();
    $data['tr'] = $this->perekapan_model->tampil_data()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pelanggaran_update', $data);
    $this->load->view('template/footer');
  }
  public function update_aksi()
  {
    $id = $this->input->post('id_pelanggaran');
    $id_siswa = $this->input->post('id_siswa');
    $id_guru = $this->input->post('id_guru');
    $id_kp = $this->input->post('id_kp');
    $id_perekapan = $this->input->post('id_perekapan');
    $id_KJ = $this->input->post('id_KJ');
    $kelas = $this->input->post('kelas');
    $nama_jurusan = $this->input->post('nama_jurusan');
    $tanggal = $this->input->post('tanggal');
    $catatan = $this->input->post('catatan');


    $data = array(
      'id_pelanggaran'    => $id,
      'id_siswa'  => $id_siswa,
      'id_guru'  => $id_guru,
      'id_kp'     => $id_kp,
      'id_perekapan'  => $id_perekapan,
      'id_KJ'  => $id_KJ,
      'kelas'  => $kelas,
      'nama_jurusan'  => $nama_jurusan,
      'tanggal'  => $tanggal,
      'catatan'    => $catatan

    );

    $where = array(
      'id_pelanggaran' => $id
    );

    $this->pelanggaran_model->update_data($where, $data, 'pelanggaran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('pelanggaran');
  }


  public function delete($id)
  {
    $where = array('id_pelanggaran' => $id);
    $this->pelanggaran_model->hapus_data($where, 'pelanggaran');

    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('pelanggaran');
  }

  public function coba()
  {

    $data = $this->pelanggaran_model->tampil_data()->result();

    foreach ($data as $value) {
      echo $value->id_pelanggaran;
    }
  }
  public function info_pelanggaran($id_pelanggaran)
  {
    $data['pelanggaran'] = $this->pelanggaran_model->gabung_pl($id_pelanggaran);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('info_pelanggaran', $data);
    $this->load->view('template/footer');
  }

  public function ajx_load_update()
  {
    $id_KJ_update = $this->input->get('id_KJ_update');
    if ($kj = $this->pelanggaran_model->autoload($id_KJ_update)) {
      $data = array(
        'nama_jurusan_update' => $kj->nama_jurusan,
        'kelas_update' => $kj->Kelas
      );
    } else {
      $data = null;
    }

    echo json_encode($data);
  }

  public function cetak_siswa()
  {
    $data = array(
      "dataku" => array(
        "nama" => "Petani Kode",
        "url" => "http://petanikode.com"
      )
    );

    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('laporan_pdf', $data);
    //atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
    //$this->dompdf->stream("welcome.pdf");


  }
  public function detailPelanggaran()
  {
    $data =  [
      'pelanggaran' => $this->pelanggaran_model->tampil_data(['siswa.id_siswa' => $this->session->userdata('id_user')])->result(),
      'sanksi' => $this->sanksi_model->tampil_data()->result()
    ];
    // print_r($data['konsultasi']);
    // die;
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('siswa_pelanggaran_detail', $data);
    $this->load->view('template/footer');
  }

  public function getDataPelanggaran()
  {
    $id_perekapan = $this->input->post('id_perekapan');
    $nis = $this->input->post('nis');
    $pelanggaran = $this->pelanggaran_model->getPelanggaran($id_perekapan, $nis)->result();
    $html = "<tr>";
    $html .= "<td>Tanggal</td>";
    $html .= "<td>Nama Pelanggaran</td>";
    $html .= "<td>bobot</td>";
    $html .= "</tr>";
    foreach ($pelanggaran as $key => $value) {
      $html .= "<tr>";
      $html .= "<td>$value->tanggal</td>";
      $html .= "<td>$value->bentuk_pelanggaran</td>";
      $html .= "<td>$value->bobot</td>";
      $html .= "</tr>";
    }
    echo json_encode($html);
  }
}
