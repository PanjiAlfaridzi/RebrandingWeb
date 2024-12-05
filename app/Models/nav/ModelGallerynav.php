<?php

namespace App\Models\nav;

use CodeIgniter\Model;

class ModelGallerynav extends Model
{
    protected $table = 'tbl_galeri';
    protected $primaryKey = 'id_galeri';
    protected $allowedFields = ['judul_galeri', 'file_galeri', 'tgl_galeri', 'jam_galeri'];
    protected $useTimestamps = true;
}
