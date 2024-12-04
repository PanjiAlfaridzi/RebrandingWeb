<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHukum extends Model
{
    protected $table = 'tbl_hukum';
    protected $primaryKey = 'id_hukum';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_hukum')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_hukum')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_hukum')
            ->where('id_hukum', $data['id_hukum'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_hukum')
            ->where('id_hukum', $data['id_hukum'])
            ->delete($data);
    }




    // Method baru untuk mengambil berita terbaru
}
