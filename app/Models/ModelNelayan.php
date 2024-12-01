<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNelayan extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_nelayan')
        ->get()->getResultArray();
    }

    public function InsertData($data){
        $this->db->table('tbl_nelayan')->insert($data);
    }

    public function UpdateData($data){
        $this->db->table('tbl_nelayan')
        ->where('id_nelayan', $data['id_nelayan'])
        ->update($data);
    }

    public function DeleteData($data){
        $this->db->table('tbl_nelayan')
        ->where('id_nelayan', $data['id_nelayan'])
        ->delete($data);
    }
}
