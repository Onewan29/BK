<?php
class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("Login_model");
        $this->load->model("siswa_model");
        $this->load->model("wali_kelas_model");
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }
    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = $password;

            $cekAdmin = $this->Login_model->cek_login($user, $pass);
            $cekSiswa = $this->siswa_model->cek_login_siswa($user, $pass);
            $cekOrtu = $this->siswa_model->cek_login_ortu($user, $pass);
            $cekWalikelas = $this->wali_kelas_model->cek_login_walikelas($user, $pass);

            if ($cekAdmin->num_rows() > 0) {
                foreach ($cekAdmin->result() as $ck) {
                    $sess_data['Username'] = $ck->Username;
                    $sess_data['level'] = $ck->level;
                    $this->session->set_userdata($sess_data);
                }
                if ($sess_data['level'] == 'admin') {
                    redirect('dashboard');
                } else if ($sess_data['level'] == 'user') {
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                    redirect('Auth');
                }
            } else if ($cekSiswa->num_rows() > 0) {
                $dataSiswa = $cekSiswa->row();
                $sess_data['id_user'] = $dataSiswa->id_siswa;
                $sess_data['Username'] = $dataSiswa->nama_siswa;
                $sess_data['level'] = 'siswa';
                $this->session->set_userdata($sess_data);
                redirect('dashboard');
            } else if ($cekOrtu->num_rows() > 0) {
                $dataSiswa = $cekOrtu->row();
                $sess_data['id_user'] = $dataSiswa->id_siswa;
                $sess_data['Username'] = 'Orangtua ' . $dataSiswa->nama_siswa;
                $sess_data['level'] = 'ortu';
                $this->session->set_userdata($sess_data);
                redirect('dashboard');
            } else if ($cekWalikelas->num_rows() > 0) {
                $dataWalikelas = $cekWalikelas->row();
                $sess_data['id_user'] = $dataWalikelas->nip;
                $sess_data['Username'] = 'Wali Kelas ' . $dataWalikelas->id_KJ;
                $sess_data['level'] = 'wali kelas';
                $this->session->set_userdata($sess_data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('Auth');
            }
        }
    }
    public function Keluar()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }
}
