<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDokumen extends Model
{
    protected $table = 'tbl_dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_dokumen')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_dokumen')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_dokumen')
            ->where('id_dokumen', $data['id_dokumen'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_dokumen')
            ->where('id_dokumen', $data['id_dokumen'])
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
