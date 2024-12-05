<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelSaatnav;

class Saatnav extends BaseController
{
    protected $ModelSaatnav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelSaatnav = new ModelSaatnav();
    }

    public function index()
    {
        $data['dokumen'] = $this->ModelSaatnav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_saatnav', $data);
    }
}
