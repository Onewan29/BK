<?php
class konsul_model extends CI_Model
{
    public function tampil_data($where = null)
    {
        if ($where != null) {
            $this->db->join('siswa', 'siswa.id_siswa = konsultasi.id_siswa');
            return $this->db->get_where('konsultasi', $where);
        }
        return $this->db->get('konsultasi');
    }
    public function input_data($data)
    {
        $this->db->insert('konsultasi', $data);
    }
    public function edit_data($where, $table)
    {
        $this->db->join('kj', 'konsultasi.id_KJ=kj.id_KJ');
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
        $this->db->order_by('id_konsultasi');
        return $this->db->from('konsultasi')
            ->join('siswa', 'siswa.id_siswa=konsultasi.id_siswa')
            ->get()
            ->result();
    }

    public function cari_gabung($id)
    {
        $this->db->order_by('id_konsultasi');
        return $this->db->from('konsultasi')
            ->join('siswa', 'siswa.id_siswa=konsultasi.id_siswa')
            ->where('siswa.id_siswa', '$id')
            ->get_()
            ->row();
    }

    public function gabung_sk($id_konsultasi)
    {
        return $this->db->from('konsultasi')
            ->join('siswa', 'konsultasi.id_siswa=siswa.id_siswa')
            ->join('perekapan', 'konsultasi.id_perekapan=perekapan.id_perekapan')
            ->join('guru', 'konsultasi.id_guru=guru.id_guru')
            ->join('kj', 'konsultasi.id_KJ=kj.id_KJ')
            ->where('konsultasi.id_konsultasi', $id_konsultasi)
            ->get()
            ->result();
    }
    public function panggil_perekapan()
    {

        return $this->db->get('perekapan')->result();
    }
    public function panggil_siswa()
    {
        return $this->db->get('id_siswa')->result();
    }
    public function panggil_guru()
    {
        return $this->db->get('id_guru')->result();
    }

    public function jurusan($id_KJ)
    {
        return $this->db->from('kj')
            ->join('konsultasi', 'konsultasi.id_KJ=kj.id_KJ')
            ->where('kj.id_KJ', $id_KJ)
            ->get()
            ->result();
    }

    public function autoload($id_KJ)
    {
        $this->db->select('*');
        return $this->db->get_where('kj', array('id_KJ' => $id_KJ))->row();
    }
}
