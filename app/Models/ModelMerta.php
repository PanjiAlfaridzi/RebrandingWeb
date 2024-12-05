<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMerta extends Model
{
    protected $table = 'tbl_merta';
    protected $primaryKey = 'id_merta';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_merta')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_merta')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_merta')
            ->where('id_merta', $data['id_merta'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_merta')
            ->where('id_merta', $data['id_merta'])
            ->delete($data);
    }

    // Method baru untuk mengambil berita terbaru
}
