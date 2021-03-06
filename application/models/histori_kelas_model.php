<?php
class Histori_kelas_model extends CI_Model
{
    public function tampil_data($where = null)
    {
        $this->db->join('kj', 'histori_kelas.id_kj = kj.id_KJ');
        $this->db->join('perekapan', 'histori_kelas.id_tahun_ajar = perekapan.id_perekapan');
        return $this->db->get_where('histori_kelas', $where);
    }

    public function input_data($data)
    {
        $this->db->insert('histori_kelas', $data);
    }

    public function edit_data($where)
    {
        return $this->db->get_where('histori_kelas', $where);
    }

    public function update_data($where, $data)
    {
        $this->db->update('histori_kelas', $data, $where);
    }

    public function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('histori_kelas');
    }

    public function lihat_siswa($id_kj, $id_tahun_ajar)
    {
        $this->db->join('siswa', 'siswa.id_siswa=histori_kelas.id_siswa');
        $this->db->join('kj', 'siswa.id_KJ=kj.id_KJ');
        return $this->db->get_where('histori_kelas', ['histori_kelas.id_kj' => $id_kj, 'histori_kelas.id_tahun_ajar' => $id_tahun_ajar])->result();
    }

    public function lihat_konsultasi($id_kj, $id_tahun_ajar)
    {
        $this->db->join('siswa', 'siswa.id_siswa=histori_kelas.id_siswa');
        $this->db->join('konsultasi', 'siswa.id_siswa=konsultasi.id_siswa');
        return $this->db->get_where('histori_kelas', ['histori_kelas.id_kj' => $id_kj, 'histori_kelas.id_tahun_ajar' => $id_tahun_ajar])->result();
    }

    public function lihat_pelanggaran($id_kj, $id_tahun_ajar)
    {
        $this->db->join('siswa', 'siswa.id_siswa=histori_kelas.id_siswa');
        $this->db->join('pelanggaran', 'siswa.id_siswa=pelanggaran.id_siswa');
        $this->db->join('guru', 'guru.id_guru=pelanggaran.id_guru');
        $this->db->join('kp', 'kp.id_kp=pelanggaran.id_kp');
        $this->db->join('kj', 'pelanggaran.id_KJ=kj.id_KJ');
        $this->db->join('perekapan', 'perekapan.id_perekapan=pelanggaran.id_perekapan');
        return $this->db->get_where('histori_kelas', ['histori_kelas.id_kj' => $id_kj, 'histori_kelas.id_tahun_ajar' => $id_tahun_ajar])->result();
    }
}
