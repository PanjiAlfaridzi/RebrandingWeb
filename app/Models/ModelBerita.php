<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
    protected $table = 'tbl_berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = ['judul_berita', 'isi_berita', 'gambar_berita', 'type_berita']; // Tambahkan type_berita

    public function AllData()
    {
        return $this->findAll();
    }

    public function InsertData($data)
    {
        $this->insert($data);
    }

    public function UpdateData($data)
    {
        $this->update($data['id_berita'], $data);
    }

    public function DeleteData($data)
    {
        $this->delete($data['id_berita']);
    }

    public function DetailBerita($id_berita)
    {
        return $this->find($id_berita);
    }

    public function getPaginatedData($perPage, $page)
    {
        return $this->paginate($perPage, 'default', $page);
    }

    // Method baru untuk mengambil berita terbaru
    public function getRecentNews($limit = 5)
    {
        return $this->orderBy('tgl_berita', 'DESC')
            ->limit($limit)
            ->findAll();
    }
}
