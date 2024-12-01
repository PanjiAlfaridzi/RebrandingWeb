<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
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
