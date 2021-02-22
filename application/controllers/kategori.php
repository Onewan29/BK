<?php
class kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("kategori_model");
    }


    public function index()
    {

        $data['kp'] = $this->kategori_model->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_kp'                 => set_value('id_kp'),
            'tatib'    => set_value('tatib'),
            'bentuk_pelanggaran'    => set_value('bentuk_pelanggaran'),
            'bobot'                 => set_value('bobot'),
            'keterangan'            => set_value('keterangan'),
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori_form', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {
        $id_kp                  = $this->input->post('id_kp');
        $tatib     = $this->input->post('tatib');
        $bentuk_pelanggaran     = $this->input->post('bentuk_pelanggaran');
        $bobot                  = $this->input->post('bobot');
        $keterangan             = $this->input->post('keterangan');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_kp'                 => $id_kp,
                'tatib'                 => $tatib,
                'bentuk_pelanggaran'    => $bentuk_pelanggaran,
                'bobot'                 => $bobot,
                'keterangan'            => $keterangan
            );
            $this->kategori_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('kategori');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('kategori');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_kp', 'id_kp', 'xss_clean|is_unique[kp.id_kp]');
        $this->form_validation->set_rules('tatib', 'tatib', 'xss_clean|is_unique[kp.tatib]');
        $this->form_validation->set_rules('bentuk_pelanggaran', 'bentuk_pelanggaran', 'xss_clean|is_unique[kp.bentuk_pelanggaran]');
        $this->form_validation->set_rules('bobot', 'bobot', 'xss_clean|is_unique[kp.bobot]');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'xss_clean|is_unique[kp.keterangan]');
    }
    public function update($id)
    {
        $where = array('id_kp' => $id);
        $data['kp'] = $this->kategori_model->edit_data(
            $where,
            'kp'
        )->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori_update', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi()
    {
        $id_kp = $this->input->get('id_kp');
        $tatib = $this->input->get('tatib');
        $bentuk_pelanggaran = $this->input->get('bentuk_pelanggaran');
        $bobot = $this->input->get('bobot');
        $keterangan = $this->input->get('keterangan');

        $data = array(
            'id_kp'                 => $id_kp,
            'tatib'                 => $tatib,
            'bentuk_pelanggaran'    => $bentuk_pelanggaran,
            'bobot'                 => $bobot,
            'keterangan'            => $keterangan,
        );
        $where = array(
            'id_kp' => $id_kp
        );
        $this->kategori_model->update_data($where, $data, 'kp');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('kategori');
    }
    public function delete($id)
    {
        $where = array('id_kp' => $id);
        $this->kategori_model->hapus_data($where, 'kp');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('kategori');
    }
}
