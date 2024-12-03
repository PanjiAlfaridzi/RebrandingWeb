<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGaleri extends Model
{
    protected $table = 'tbl_galeri';
    protected $primaryKey = 'id_galeri';
    protected $allowedFields = ['judul_galeri', 'isi_galeri', 'file_galeri'];

    public function AllData()
    {
        return $this->db->table('tbl_galeri')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_galeri')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_galeri')
            ->where('id_galeri', $data['id_galeri'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_galeri')
            ->where('id_galeri', $data['id_galeri'])
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
