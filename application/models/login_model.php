<?php
class Login_model extends CI_Model
{
    public function cek_login($user, $pass)
    {

        $this->db->where("Username", $user);
        $this->db->where("password", $pass);
        return $this->db->get('tabel_user');
    }

    public function getLoginData($user, $pass)
    {
        $u = $user;
        $p = $pass;
        $query_ceklogin = $this->db->get_where('tabel_user', array('Username' => $u, 'password' => $p));

        if (count($query_ceklogin->result()) > 0) {

            foreach ($query_ceklogin->result() as $ck) {
                $sess_data['logged_in'] = TRUE;
                $sess_data['Username'] = $ck->Username;
                $sess_data['password'] = $ck->password;
                $sess_data['level'] = $ck->level;
                $this->session->set_userdata($sess_data);
            }
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
