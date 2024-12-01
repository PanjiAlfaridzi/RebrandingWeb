<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
    protected $table = 'tbl_berita'; // Nama tabel
    protected $primaryKey = 'id_berita'; // Primary key tabel
    protected $allowedFields = ['judul_berita', 'isi_berita', 'gambar_berita'];
    public function AllData()
    {
        return $this->db->table('tbl_berita')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_berita')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_berita')
            ->where('id_berita', $data['id_berita'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_berita')
            ->where('id_berita', $data['id_berita'])
            ->delete($data);
    }
}
