<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKecuali extends Model
{
    protected $table = 'tbl_kecuali';
    protected $primaryKey = 'id_kecuali';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];

    public function AllData()
    {
        return $this->db->table('tbl_kecuali')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_kecuali')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_kecuali')
            ->where('id_kecuali', $data['id_kecuali'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_kecuali')
            ->where('id_kecuali', $data['id_kecuali'])
            ->delete($data);
    }




    // Method baru untuk mengambil berita terbaru
}
