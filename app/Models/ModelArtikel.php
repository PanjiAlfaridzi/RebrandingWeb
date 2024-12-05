<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelArtikel extends Model
{
    protected $table = 'tbl_berita';
    protected $primaryKey = 'id_berita';
    protected $returnType = 'array';
    protected $allowedFields = ['judul_berita', 'isi_berita', 'gambar_berita', 'tgl_berita', 'jam_berita'];

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

    public function getPaginatedData($perPage, $page)
    {
        return $this->table($this->table)
            ->paginate($perPage, 'default', $page);
    }
    // Method baru untuk mengambil berita terbaru
}
