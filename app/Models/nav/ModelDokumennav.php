<?php

namespace App\Models\nav;

use CodeIgniter\Model;

class ModelDokumennav extends Model
{
    protected $table = 'tbl_dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
