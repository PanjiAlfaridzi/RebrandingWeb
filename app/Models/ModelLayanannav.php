<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelLayanannav extends Model
{
    protected $table = 'tbl_layanan';
    protected $primaryKey = 'id_layanan';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
