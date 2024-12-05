<?php

namespace App\Models\nav;

use CodeIgniter\Model;


class ModelBerkalanav extends Model
{
    protected $table = 'tbl_berkala';
    protected $primaryKey = 'id_berkala';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
