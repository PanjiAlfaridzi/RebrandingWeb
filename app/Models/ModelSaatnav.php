<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSaatnav extends Model
{
    protected $table = 'tbl_saat';
    protected $primaryKey = 'id_saat';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
