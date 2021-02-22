<?php
class sanksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("sanksi_model");
    }


    public function index()
    {

        $data['tabel_sanksi'] = $this->sanksi_model->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('sanksi', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_sanksi'      => set_value('id_sanksi'),
            'jenis_sanksi'    => set_value('jenis_sanksi'),
            'poin_sanksi'       => set_value('poin_sanksi'),


        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('sanksi', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {

        $id_sanksi     = $this->input->post('id_sanksi');
        $jenis_sanksi   = $this->input->post('jenis_sanksi');
        $poin_sanksi      = $this->input->post('poin_sanksi');



        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_sanksi'      => $id_sanksi,
                'jenis_sanksi'    => $jenis_sanksi,
                'poin_sanksi'       => $poin_sanksi

            );
            $this->sanksi_model->input_data($data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('sanksi');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('sanksi');
        }
    }
    public function _rules()
    {

        $this->form_validation->set_rules('id_sanksi', 'id_sanksi', 'xss_clean|is_unique[tabel_sanksi.id_sanksi]');
        $this->form_validation->set_rules('jenis_sanksi', 'jenis_sanksi', 'xss_clean|is_unique[tabel_sanksi.jenis_sanksi]');
        $this->form_validation->set_rules('poin_sanksi', 'poin_sanksi', 'xss_clean|is_unique[tabel_sanksi.poin_sanksi]');
    }
    public function update($id)
    {
        $where = array('id_sanksi' => $id);
        $data['sanksi'] = $this->sanksi_model->edit_data(
            $where,
            'tabel_sanksi'
        )->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('sanksi', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi($id)
    {
        // $id = $this->input->post('id_sanksi');
        $jenis_sanksi = $this->input->post('jenis_sanksi');
        $poin_sanksi = $this->input->post('poin_sanksi');

        $data = array(
            'id_sanksi'    => $id,
            'jenis_sanksi'  => $jenis_sanksi,
            'poin_sanksi'     => $poin_sanksi


        );
        $where = array(
            'id_sanksi' => $id
        );
        $this->sanksi_model->update_data($where, $data, 'tabel_sanksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('sanksi');
    }
    public function delete($id)
    {
        $where = array('id_sanksi' => $id);
        $this->sanksi_model->hapus_data($where, 'tabel_sanksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('sanksi');
    }
}
