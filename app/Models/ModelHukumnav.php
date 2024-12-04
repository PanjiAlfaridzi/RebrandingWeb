<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHukumnav extends Model
{
    protected $table = 'tbl_hukum';
    protected $primaryKey = 'id_hukum';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
