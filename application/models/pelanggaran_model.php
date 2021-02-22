<?php
class pelanggaran_model extends CI_Model
{
    public function tampil_data($where = null)
    {
        if ($where != null) {
            $this->db->select('siswa.id_siswa, siswa.nama_siswa, siswa.jenis_kelamin, pelanggaran.kelas, pelanggaran.nama_jurusan, sum(kp.bobot) as jumlah_poin, id_perekapan');
            $this->db->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
            $this->db->join('guru', 'guru.id_guru = pelanggaran.id_guru');
            $this->db->join('kp', 'kp.id_kp = pelanggaran.id_kp');
            $this->db->group_by('id_perekapan');
            return $this->db->get_where('pelanggaran', $where);
        }
        return $this->db->get('pelanggaran');
    }

    public function getPelanggaran($perekapan, $nis)
    {
        $this->db->join('kp', 'kp.id_kp = pelanggaran.id_kp');
        $this->db->where('id_perekapan', $perekapan);
        $this->db->where('id_siswa', $nis);
        return $this->db->get('pelanggaran');
    }



    public function getall()
    {
        return $this->db->get('kp');
    }

    public function input_data($data)
    {
        $this->db->insert('pelanggaran', $data);
    }
    public function edit_data($where, $table)
    {
        $this->db->join('kj', 'pelanggaran.id_KJ=kj.id_KJ');
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
        $this->db->from('pelanggaran');
        $this->db->join('siswa', 'siswa.id_siswa=pelanggaran.id_siswa');
        $this->db->join('guru', 'guru.id_guru=pelanggaran.id_guru');
        $this->db->join('kp', 'kp.id_kp=pelanggaran.id_kp');
        $this->db->join('kj', 'pelanggaran.id_KJ=kj.id_KJ');
        $this->db->join('perekapan', 'perekapan.id_perekapan=pelanggaran.id_perekapan');
        return $this->db->get();
    }

    public function gabung_pl($id_pelanggaran)
    {

        return $this->db->from('pelanggaran')
            ->join('siswa', 'siswa.id_siswa=pelanggaran.id_siswa')
            ->join('guru', 'guru.id_guru=pelanggaran.id_guru')
            ->join('kp', 'kp.id_kp=pelanggaran.id_kp')
            ->join('perekapan', 'perekapan.id_perekapan=pelanggaran.id_perekapan')
            ->where('pelanggaran.id_pelanggaran', $id_pelanggaran)
            ->get()
            ->result();
    }
    public function perekapan($id_perekapan)
    {
        return $this->db->select("*, sum(kp.bobot) as total_pelanggaran")->from('perekapan')
            ->join('pelanggaran', 'pelanggaran.id_perekapan=perekapan.id_perekapan')
            ->join('siswa', 'siswa.id_siswa=pelanggaran.id_siswa')
            ->join('kp', 'kp.id_kp=pelanggaran.id_kp')
            ->where('perekapan.id_perekapan', $id_perekapan)
            ->group_by('pelanggaran.id_siswa')
            ->get()
            ->result();
    }

    public function jurusan($id_KJ)
    {
        return $this->db->from('kj')
            ->join('pelanggaran', 'pelanggaran.id_KJ=kj.id_KJ')
            ->where('kj.id_KJ', $id_KJ)
            ->get()
            ->result();
    }

    public function autoload($id_KJ_update)
    {
        $this->db->select('*');
        return $this->db->get_where('kj', array('id_KJ' => $id_KJ_update))->row();
    }
}
