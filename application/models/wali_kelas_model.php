<?php
class wali_kelas_model extends CI_Model
{
    public function tampil_data($where = null)
    {
        if ($where != null) {
            $this->db->join('kj', 'kj.id_KJ = tabel_walikelas.id_KJ');
            return $this->db->get_where('tabel_walikelas', $where);
        }
        return $this->db->get('tabel_walikelas');
    }
    public function input_data($data)
    {
        $this->db->insert('tabel_walikelas', $data);
    }
    public function edit_data($where, $table)
    {
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
        $this->db->order_by('id_walikelas');
        return $this->db->from('tabel_walikelas')
            ->join('kj', 'tabel_walikelas.id_KJ=kj.id_KJ')
            ->get()
            ->result();
    }
    public function gabung_ii($id_walikelas)
    {
        return $this->db->from('tabel_walikelas')
            ->join('kj', 'tabel_walikelas.id_KJ=kj.id_KJ')
            ->where('tabel_walikelas.id_walikelas', $id_walikelas)
            ->get()
            ->result();
    }
    public function jurusan($id_KJ)
    {
        return $this->db->from('kj')
            ->join('tabel_walikelas', 'tabel_walikelas.id_KJ=kj.id_KJ')
            ->where('kj.id_KJ', $id_KJ)
            ->get()
            ->result();
    }

    public function cek_login_walikelas($user, $pass)
    {
        $this->db->where("nip", $user);
        $this->db->where("password", $pass);
        return $this->db->get("tabel_walikelas");
    }
}
