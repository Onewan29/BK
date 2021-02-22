<?php
class perekapan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("perekapan_model");
        $this->load->model("pelanggaran_model");
        $this->load->model("sanksi_model");
    }


    public function index()
    {

        $data['perekapan'] = $this->perekapan_model->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('perekapan', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_perekapan'         => set_value('id_perekapan'),
            'thn_ajaran'  => set_value('thn_ajaran'),
            'semester'         => set_value('semester'),
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('perekapan_form', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {
        $id_perekapan         = $this->input->post('id_perekapan');

        $thn_ajaran  = $this->input->post('thn_ajaran');
        $semester         = $this->input->post('semester');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_perekapan' => $id_perekapan,

                'thn_ajaran'  => $thn_ajaran,
                'semester'         => $semester
            );
            $this->perekapan_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('perekapan');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('perekapan');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_perekapan', 'id_perekapan', 'xss_clean|is_unique.id_perekapan');

        $this->form_validation->set_rules('thn_ajaran', 'thn_ajaran', 'xss_clean|is_unique[perekapan.thn_ajaran]');
        $this->form_validation->set_rules('semester', 'semester', 'xss_clean|is_unique[perekapan.semester]');
    }
    public function update($id)
    {
        $where = array('id_perekapan' => $id);
        $data['perekapan'] = $this->perekapan_model->edit_data(
            $where,
            'perekapan'
        )->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('perekapan_update', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi()
    {
        $id = $this->input->post('id_perekapan');

        $thn_ajaran = $this->input->post('thn_ajaran');
        $semester = $this->input->post('semester');

        $data = array(
            'id_perekapan' => $id,

            'thn_ajaran' => $thn_ajaran,
            'semester' => $semester,
        );
        $where = array(
            'id_perekapan' => $id
        );
        $this->perekapan_model->update_data($where, $data, 'perekapan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('perekapan');
    }
    public function delete($id)
    {
        $where = array('id_perekapan' => $id);
        $this->perekapan_model->hapus_data($where, 'perekapan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('perekapan');
    }

    public function info_perekapan($id_perekapan)
    {
        $data['sanksi'] = $this->sanksi_model->tampil_data()->result();
        $data['perekapan'] = $this->pelanggaran_model->perekapan($id_perekapan);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('info_perekapan', $data);
        $this->load->view('template/footer');
    }
}
