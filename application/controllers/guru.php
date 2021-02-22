<?php
class guru extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("guru_model");
  }


  public function index()
  {

    $data['guru'] = $this->guru_model->tampil_data()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('guru', $data);
    $this->load->view('template/footer');
  }
  public function input()
  {
    $data = array(
      'id_guru'      => set_value('id_guru'),
      'nama_guru'    => set_value('nama_guru'),
      'alamat'       => set_value('alamat'),
      'golongan'     => set_value('golongan'),
      'spesialis'    => set_value('spesialis'),

    );
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('guru_form', $data);
    $this->load->view('template/footer');
  }
  public function input_aksi()
  {

    $id_guru     = $this->input->post('id_guru');
    $nama_guru   = $this->input->post('nama_guru');
    $alamat      = $this->input->post('alamat');
    $golongan    = $this->input->post('golongan');
    $spesialis   = $this->input->post('spesialis');


    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $data = array(
        'id_guru'      => $id_guru,
        'nama_guru'    => $nama_guru,
        'alamat'       => $alamat,
        'golongan'     => $golongan,
        'spesialis'    => $spesialis

      );
      $this->guru_model->input_data($data);
      $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('guru');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('guru');
    }
  }
  public function _rules()
  {

    $this->form_validation->set_rules('id_guru', 'id_guru', 'xss_clean|is_unique[guru.id_guru]');
    $this->form_validation->set_rules('nama_guru', 'nama_guru', 'xss_clean|is_unique[guru.nama_guru]');
    $this->form_validation->set_rules('alamat', 'alamat', 'xss_clean|is_unique[guru.alamat]');
    $this->form_validation->set_rules('spesialis', 'spesialis', 'xss_clean|is_unique[guru.spesialis]');
  }
  public function update($id)
  {
    $where = array('id_guru' => $id);
    $data['guru'] = $this->guru_model->edit_data(
      $where,
      'guru'
    )->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('guru_update', $data);
    $this->load->view('template/footer');
  }
  public function update_aksi($id)
  {
    // $id = $this->input->post('id_guru');

    $nama_guru = $this->input->post('nama_guru');
    $alamat = $this->input->post('alamat');
    $golongan = $this->input->post('golongan');
    $spesialis = $this->input->post('spesialis');


    $data = array(
      // 'id_guru'    => $id,

      'nama_guru'  => $nama_guru,
      'alamat'     => $alamat,
      'golongan'     => $golongan,
      'spesialis'  => $spesialis

    );
    $where = array(
      'id_guru' => $id
    );

    $this->guru_model->update_data($where, $data, 'guru');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('guru');
  }
  public function delete($id)
  {
    $where = array('id_guru' => $id);
    $this->guru_model->hapus_data($where, 'guru');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('guru');
  }
}
