<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelMertanav extends Model
{
    protected $table = 'tbl_merta';
    protected $primaryKey = 'id_merta';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
