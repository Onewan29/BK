<?php
class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("user_model");
    }


    public function index()
    {

        $data['tabel_user'] = $this->user_model->tampil_semua_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('user', $data);
        $this->load->view('template/footer');
    }
    public function input()
    {
        $data = array(
            'id_user'      => set_value('id_user'),
            'Username'       => set_value('Username'),
            'password'       => set_value('password'),
            'level'       => set_value('level'),


        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('user', $data);
        $this->load->view('template/footer');
    }
    public function input_aksi()
    {

        $id_user     = $this->input->post('id_user');
        $Username      = $this->input->post('Username');
        $password      = $this->input->post('password');
        $level      = $this->input->post('level');



        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id_user'      => $id_user,
                'Username'       => $Username,
                'password'       => $password,
                'level'       => $level

            );
            $this->user_model->input_data($data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('user');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Gagal di tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('user');
        }
    }
    public function _rules()
    {

        $this->form_validation->set_rules('id_user', 'id_user', 'xss_clean|is_unique[tabel_user.id_suser]');
        $this->form_validation->set_rules('Username', 'Username', 'xss_clean|is_unique[tabel_user.Username]');
        $this->form_validation->set_rules('password', 'password', 'xss_clean|is_unique[tabel_user.password]');
        $this->form_validation->set_rules('level', 'level', 'xss_clean|is_unique[tabel_user.level]');
    }
    public function update($id)
    {
        $where = array('id_user' => $id);
        $data['user'] = $this->user_model->edit_data(
            $where,
            'tabel_user'
        )->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('user', $data);
        $this->load->view('template/footer');
    }
    public function update_aksi($id)
    {
        // $id = $this->input->post('id_sanksi');
        $foto = $this->input->post('foto');
        $Username = $this->input->post('Username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'id_user'    => $id,
            'Username'  => $Username,
            'password'  => $password,
            'level'     => $level


        );
        $where = array(
            'id_user' => $id
        );
        $this->user_model->update_data($where, $data, 'tabel_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('user');
    }
    public function delete($id)
    {
        $where = array('id_user' => $id);
        $this->user_model->hapus_data($where, 'tabel_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil di Hapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('user');
    }
}
