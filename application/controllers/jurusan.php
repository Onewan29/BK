<?php
class jurusan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("jurusan_model");
        $this->load->model("siswa_model");
    }


    public function index()
    {

        $data['kj'] = $this->jurusan_model->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jurusan', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_KJ'         => set_value('id_KJ'),
            'nama_jurusan'  => set_value('nama_jurusan'),
            'Kelas'         => set_value('Kelas'),
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jurusan_form', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {
        $id_KJ         = $this->input->post('id_KJ');
        $nama_jurusan  = $this->input->post('nama_jurusan');
        $Kelas         = $this->input->post('kelas');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_KJ'         => $id_KJ,
                'nama_jurusan'  => $nama_jurusan,
                'Kelas'         => $Kelas
            );
            $this->jurusan_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('jurusan');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('jurusan');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_KJ', 'id_KJ', 'xss_clean|is_unique[kj.id_KJ]');
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'xss_clean|is_unique[kj.nama_jurusan]');
        $this->form_validation->set_rules('Kelas', 'Kelas', 'xss_clean|is_unique[kj.Kelas]');
    }
    public function update($id)
    {
        $where = array('id_KJ' => $id);
        $data['kj'] = $this->jurusan_model->edit_data(
            $where,
            'kj'
        )->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jurusan_update', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi()
    {
        $id = $this->input->post('id_KJ');
        $nama_jurusan = $this->input->post('nama_jurusan');
        $Kelas = $this->input->post('Kelas');

        $data = array(
            'id_KJ'     => $id,
            'nama_jurusan' => $nama_jurusan,
            'Kelas' => $Kelas,
        );
        $where = array(
            'id_KJ' => $id
        );
        $this->jurusan_model->update_data($where, $data, 'kj');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('jurusan');
    }
    public function delete($id)
    {
        $where = array('id_KJ' => $id);
        $this->jurusan_model->hapus_data($where, 'kj');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('jurusan');
    }


    public function info_kj($id_KJ)
    {
        $data['kj'] = $this->siswa_model->jurusan($id_KJ);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('info_kj', $data);
        $this->load->view('template/footer');
    }
}
