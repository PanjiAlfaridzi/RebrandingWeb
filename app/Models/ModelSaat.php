<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSaat extends Model
{
    protected $table = 'tbl_saat';
    protected $primaryKey = 'id_saat';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_saat')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_saat')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_saat')
            ->where('id_saat', $data['id_saat'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_saat')
            ->where('id_saat', $data['id_saat'])
            ->delete($data);
    }

    public function DetailBerita($id_berita)
    {
        return $this->db->table('tbl_berita')
            ->where('id_berita', $id_berita)
            ->get()->getRowArray();
    }



    // Method baru untuk mengambil berita terbaru
}
