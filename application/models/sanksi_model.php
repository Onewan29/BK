<?php
class sanksi_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->order_by('poin_sanksi', 'ASC');
        return $this->db->get('tabel_sanksi');
    }
    public function input_data($data)
    {
        $this->db->insert('tabel_sanksi', $data);
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
}
