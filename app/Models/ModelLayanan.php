<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLayanan extends Model
{
    protected $table = 'tbl_layanan';
    protected $primaryKey = 'id_layanan';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_layanan')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_layanan')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_layanan')
            ->where('id_layanan', $data['id_layanan'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_layanan')
            ->where('id_layanan', $data['id_layanan'])
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
