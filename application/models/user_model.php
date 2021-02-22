<?php

class User_model extends CI_Model
{
    function tampil_data($tabel_user = null)
    {
        if ($tabel_user != null) {
            $this->db->where('Username', $tabel_user);
        }
        $query = $this->db->get('tabel_user');
        return $query->row();
    }

    function tampil_semua_data()
    {
        return $this->db->get('tabel_user');
    }
    public function input_data($data)
    {
        $this->db->insert('tabel_user', $data);
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
}
