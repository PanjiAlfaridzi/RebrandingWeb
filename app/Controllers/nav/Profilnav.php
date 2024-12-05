<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelProfilnav;

class Profilnav extends BaseController
{
    protected $ModelProfilnav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelProfilnav = new ModelProfilnav();
    }

    public function index()
    {
        $data['dokumen'] = $this->ModelProfilnav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_profilnav', $data);
    }
}
