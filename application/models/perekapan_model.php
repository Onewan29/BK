<?php
class perekapan_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('perekapan');
    }
    public function input_data($data)
    {
        $this->db->insert('perekapan', $data);
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
        $this->db->select('*');
        $this->db->from('perekapan');
        $this->db->join('pelanggaran', 'pelanggaran.id_perekapan=perekapan.id_perekapan');
        return $this->db->get();
    }

    public function gabungan()
    {
        $this->db->select('*');
        $this->db->from('perekapan');
        $this->db->join('pelanggaran', 'pelanggaran.id_perekapan=perekapan.id_perekapan');
        return $this->db->get();
    }

    public function gabungan2()
    {
        $this->db->select('*');
        $this->db->from('pelanggaran');
        $this->db->join('siswa', 'siswa.id_siswa=pelanggaran.id_siswa');
        return $this->db->get();
    }
}
