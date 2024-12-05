<?php

namespace App\Models\nav;

use CodeIgniter\Model;

class ModelKecualinav extends Model
{
    protected $table = 'tbl_kecuali';
    protected $primaryKey = 'id_kecuali';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
