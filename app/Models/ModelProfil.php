<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{
    protected $table = 'tbl_profil';
    protected $primaryKey = 'id_profil';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_profil')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_profil')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_profil')
            ->where('id_profil', $data['id_profil'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_profil')
            ->where('id_profil', $data['id_profil'])
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
