<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
    protected $table = 'tbl_berita';
    protected $primaryKey = 'id_berita';
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

    public function DetailBerita($id_berita)
    {
        return $this->db->table('tbl_berita')
            ->where('id_berita', $id_berita)
            ->get()->getRowArray();
    }

    // Method baru untuk mengambil berita terbaru
}
