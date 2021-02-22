<?php
class siswa_model extends CI_Model
{
    public function tampil_data($where = null)
    {
        if ($where != null) {
            $this->db->join('kj', 'kj.id_KJ = siswa.id_KJ');
            return $this->db->get_where('siswa', $where);
        }
        return $this->db->get('siswa');
    }
    public function input_data($data)
    {
        $this->db->insert('siswa', $data);
    }
    public function edit_data($where, $table)
    {
        $this->db->join('kj', 'siswa.id_KJ=kj.id_KJ');
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function gabung()
    {
        $this->db->order_by('id_siswa');
        return $this->db->from('siswa')
            ->join('kj', 'siswa.id_KJ=kj.id_KJ')
            ->get()
            ->result();
    }

    public function gabung2($id_siswa)
    {
        return $this->db->from('siswa')
            ->join('kj', 'siswa.id_KJ=kj.id_KJ')
            ->where('siswa.id_siswa', $id_siswa)
            ->get()
            ->result();
    }

    public function jurusan($id_KJ)
    {
        return $this->db->from('kj')
            ->join('siswa', 'siswa.id_KJ=kj.id_KJ')
            ->where('kj.id_KJ', $id_KJ)
            ->get()
            ->result();
    }

    public function autoload($id_KJ)
    {
        $this->db->select('*');
        return $this->db->get_where('kj', array('id_KJ' => $id_KJ))->row();
    }

    public function autoload_update($id_KJ_update)
    {
        $this->db->select('*');
        return $this->db->get_where('kj', array('id_KJ' => $id_KJ_update))->row();
    }

    // cek login untuk siswa

    public function cek_login_siswa($user, $pass)
    {
        $this->db->where("id_siswa", $user);
        $this->db->where("password", $pass);
        return $this->db->get('siswa');
    }

    public function cek_login_ortu($user, $pass)
    {
        $this->db->where("id_siswa", $user);
        $this->db->where("password_ortu", $pass);
        return $this->db->get('siswa');
    }
}
