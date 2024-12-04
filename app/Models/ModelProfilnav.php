<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelProfilnav extends Model
{
    protected $table = 'tbl_profil';
    protected $primaryKey = 'id_profil';
    protected $allowedFields = ['judul_dokumen', 'file_dokumen', 'tgl_dokumen', 'jam_dokumen'];
    protected $useTimestamps = true;
}
