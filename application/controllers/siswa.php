<?php
class siswa extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("siswa_model");
    $this->load->model("jurusan_model");
  }


  public function index()
  {

    $data['siswa'] = $this->siswa_model->gabung();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('siswa', $data);
    $this->load->view('template/footer');
  }
  public function input()
  {

    $data = array(
      'id_siswa'      => set_value('id_siswa'),
      'nama_siswa'    => set_value('nama_siswa'),
      'password'    => set_value('password'),
      'jenis_kelamin' => set_value('jenis_kelamin'),
      'id_KJ'       => set_value('id_KJ'),
      'nilai_raport'       => set_value('nilai_raport'),
      'alamat'     => set_value('alamat'),
      'nohp'    => set_value('nohp'),
      'ttl'    => set_value('ttl'),
      'tempat_lahir'    => set_value('tempat_lahir'),
      'tinggal'    => set_value('tinggal'),
      'hoby'    => set_value('hoby'),
      'prestasi'    => set_value('prestasi'),
      'cita_cita'    => set_value('cita_cita'),
      'nama_ayah'    => set_value('nama_ayah'),
      'password_ortu'    => set_value('password_ortu'),
      'nama_ibu'    => set_value('nama_ibu'),
      'alamat_ortu'    => set_value('alamat_ortu'),
      'pekerjaan_ayah'    => set_value('pekerjaan_ayah'),
      'pendidikan_ayah'    => set_value('pendidikan_ayah'),
      'nohp_ayah'    => set_value('nohp_ayah'),
      'pekerjaan_ibu'    => set_value('pekerjaan_ibu'),
      'pendidikan_ibu'    => set_value('pendidikan_ibu'),
      'nohp_ibu'    => set_value('nohp_ibu'),



    );
    $data['kd'] = $this->jurusan_model->tampil_data()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('siswa_form', $data);
    $this->load->view('template/footer');
  }
  public function input_aksi()
  {
    $id_siswa     = $this->input->post('id_siswa');
    $nama_siswa   = $this->input->post('nama_siswa');
    $password   = $this->input->post('password');
    $jenis_kelamin   = $this->input->post('jenis_kelamin');
    $id_KJ      = $this->input->post('id_KJ');
    $nilai_raport      = $this->input->post('nilai_raport');
    $alamat    = $this->input->post('alamat');
    $nohp   = $this->input->post('nohp');
    $ttl     = $this->input->post('ttl');
    $tempat_lahir   = $this->input->post('tempat_lahir');
    $tinggal   = $this->input->post('tinggal');
    $hoby      = $this->input->post('hoby');
    $prestasi    = $this->input->post('prestasi');
    $cita_cita   = $this->input->post('cita_cita');
    $nama_ayah     = $this->input->post('nama_ayah');
    $password_ortu     = $this->input->post('password_ortu');
    $nama_ibu   = $this->input->post('nama_ibu');
    $alamat_ortu   = $this->input->post('alamat_ortu');
    $pekerjaan_ayah      = $this->input->post('pekerjaan_ayah');
    $pendidikan_ayah    = $this->input->post('pendidikan_ayah');
    $nohp_ayah   = $this->input->post('nohp_ayah');
    $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
    $pendidikan_ibu    = $this->input->post('pendidikan_ibu');
    $nohp_ibu   = $this->input->post('nohp_ibu');

    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $data = array(
        'id_siswa'      => $id_siswa,
        'nama_siswa'    => $nama_siswa,
        'password'    => $password,
        'jenis_kelamin'    => $jenis_kelamin,
        'id_KJ'       => $id_KJ,
        'nilai_raport'       => $nilai_raport,
        'alamat'     => $alamat,
        'nohp'    => $nohp,
        'ttl'      => $ttl,
        'tempat_lahir'    => $tempat_lahir,
        'tinggal'    => $tinggal,
        'hoby'       => $hoby,
        'prestasi'     => $prestasi,
        'cita_cita'    => $cita_cita,
        'nama_ayah'      => $nama_ayah,
        'password_ortu'      => $password_ortu,
        'nama_ibu'    => $nama_ibu,
        'alamat_ortu'    => $alamat_ortu,
        'pekerjaan_ayah'       => $pekerjaan_ayah,
        'pendidikan_ayah'     => $pendidikan_ayah,
        'nohp_ayah'    => $nohp_ayah,
        'pekerjaan_ibu'       => $pekerjaan_ibu,
        'pendidikan_ibu'     => $pendidikan_ibu,
        'nohp_ibu'    => $nohp_ibu

      );
      $this->siswa_model->input_data($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('siswa');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('siswa');
    }
  }
  public function _rules()
  {

    $this->form_validation->set_rules('id_siswa', 'id_siswa', 'xss_clean|is_unique[siswa.id_siswa]');
    $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'xss_clean|is_unique[siswa.nama_siswa]');
    $this->form_validation->set_rules('password', 'password', 'xss_clean|is_unique[siswa.password]');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'xss_clean|is_unique[siswa.jenis_kelamin]');
    $this->form_validation->set_rules('id_KJ', 'id_KJ', 'xss_clean|is_unique[siswa.id_KJ]');
    $this->form_validation->set_rules('nilai_raport', 'nilai_raport', 'xss_clean|is_unique[siswa.nilai_raport]');
    $this->form_validation->set_rules('alamat', 'alamat', 'xss_clean|is_unique[siswa.alamat]');
    $this->form_validation->set_rules('nohp', 'nohp', 'xss_clean|is_unique[siswa.nohp]');
    $this->form_validation->set_rules('ttl', 'ttl', 'xss_clean|is_unique[siswa.ttl]');
    $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'xss_clean|is_unique[siswa.tempat_lahir]');
    $this->form_validation->set_rules('tinggal', 'tinggal', 'xss_clean|is_unique[siswa.tinggal]');
    $this->form_validation->set_rules('hoby', 'hoby', 'xss_clean|is_unique[siswa.hoby]');
    $this->form_validation->set_rules('prestasi', 'prestasi', 'xss_clean|is_unique[siswa.prestasi]');
    $this->form_validation->set_rules('cita_cita', 'cita_cita', 'xss_clean|is_unique[siswa.cita_cita]');
    $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'xss_clean|is_unique[siswa.nama_ayah]');
    $this->form_validation->set_rules('password_ortu', 'password_ortu', 'xss_clean|is_unique[siswa.password_ortu]');
    $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'xss_clean|is_unique[siswa.nama_ibu]');
    $this->form_validation->set_rules('alamat_ortu', 'alamat_ortu', 'xss_clean|is_unique[siswa.alamat_ortu]');
    $this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'xss_clean|is_unique[siswa.pekerjaan_ayah]');
    $this->form_validation->set_rules('pendidikan_ayah', 'pendidikan_ayah', 'xss_clean|is_unique[siswa.pendidikan_ayah]');
    $this->form_validation->set_rules('nohp_ayah', 'nohp_ayah', 'xss_clean|is_unique[siswa.nohp_ayah]');
    $this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan_ibu', 'xss_clean|is_unique[siswa.pekerjaan_ibu]');
    $this->form_validation->set_rules('pendidikan_ibu', 'pendidikan_ibu', 'xss_clean|is_unique[siswa.pendidikan_ibu]');
    $this->form_validation->set_rules('nohp_ibu', 'nohp_ibu', 'xss_clean|is_unique[siswa.nohp_ibu]');
  }
  public function update($id)
  {
    $where = array('id_siswa' => $id);
    $data['siswa'] = $this->siswa_model->edit_data(
      $where,
      'siswa'
    )->result();
    $data['kd'] = $this->jurusan_model->tampil_data()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('siswa_update', $data);
    $this->load->view('template/footer');
  }
  public function update_aksi()
  {
    $id = $this->input->post('id_siswa');
    $nama_siswa = $this->input->post('nama_siswa');
    $password = $this->input->post('password');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $id_KJ = $this->input->post('id_KJ');
    $nilai_raport = $this->input->post('nilai_raport');
    $alamat = $this->input->post('alamat');
    $nohp = $this->input->post('nohp');
    $ttl     = $this->input->post('ttl');
    $tempat_lahir   = $this->input->post('tempat_lahir');
    $tinggal   = $this->input->post('tinggal');
    $hoby      = $this->input->post('hoby');
    $prestasi    = $this->input->post('prestasi');
    $cita_cita   = $this->input->post('cita_cita');
    $nama_ayah     = $this->input->post('nama_ayah');
    $password_ortu     = $this->input->post('password_ortu');
    $nama_ibu   = $this->input->post('nama_ibu');
    $alamat_ortu   = $this->input->post('alamat_ortu');
    $pekerjaan_ayah      = $this->input->post('pekerjaan_ayah');
    $pendidikan_ayah    = $this->input->post('pendidikan_ayah');
    $nohp_ayah   = $this->input->post('nohp_ayah');
    $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
    $pendidikan_ibu    = $this->input->post('pendidikan_ibu');
    $nohp_ibu   = $this->input->post('nohp_ibu');

    $data = array(
      'id_siswa'    => $id,
      'nama_siswa'  => $nama_siswa,
      'password'  => $password,
      'jenis_kelamin'  => $jenis_kelamin,
      'id_KJ'     => $id_KJ,
      'nilai_raport'     => $nilai_raport,
      'alamat'  => $alamat,
      'nohp'    => $nohp,
      'ttl'      => $ttl,
      'tempat_lahir'    => $tempat_lahir,
      'tinggal'    => $tinggal,
      'hoby'       => $hoby,
      'prestasi'     => $prestasi,
      'cita_cita'    => $cita_cita,
      'nama_ayah'      => $nama_ayah,
      'password_ortu'      => $password_ortu,
      'nama_ibu'    => $nama_ibu,
      'alamat_ortu'    => $alamat_ortu,
      'pekerjaan_ayah'       => $pekerjaan_ayah,
      'pendidikan_ayah'     => $pendidikan_ayah,
      'nohp_ayah'    => $nohp_ayah,
      'pekerjaan_ibu'       => $pekerjaan_ibu,
      'pendidikan_ibu'     => $pendidikan_ibu,
      'nohp_ibu'    => $nohp_ibu
    );

    $where = array('id_siswa' => $id);

    $this->siswa_model->update_data($where, $data, 'siswa');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('siswa');
  }
  public function delete($id)
  {
    $where = array('id_siswa' => $id);
    $this->siswa_model->hapus_data($where, 'siswa');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('siswa');
  }
  public function info_siswa($id_siswa)
  {

    $data['siswa'] = $this->siswa_model->gabung2($id_siswa);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('info_siswa', $data);
    $this->load->view('template/footer');
  }

  public function ajx_load()
  {
    $id_KJ = $this->input->get('id_KJ');
    if ($kj = $this->siswa_model->autoload($id_KJ)) {
      $data = array(
        'nama_jurusan' => $kj->nama_jurusan,
        'kelas' => $kj->Kelas
      );
    } else {
      $data = null;
    }

    echo json_encode($data);
  }

  public function ajx_load_update()
  {
    $id_KJ_update = $this->input->get('id_KJ_update');
    $kj = $this->siswa_model->autoload_update($id_KJ_update);
    $data = array(
      'nama_jurusan_update' => $kj->nama_jurusan,
      'kelas_update' => $kj->Kelas
    );

    echo json_encode($data);
  }
  public function SiswaDetail()
  {
    $data =  [
      'siswa' => $this->siswa_model->tampil_data(['siswa.id_siswa' => $this->session->userdata('id_user')])->result()
    ];
    // print_r($data['konsultasi']);
    // die;
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('siswa_info', $data);
    $this->load->view('template/footer');
  }
}
