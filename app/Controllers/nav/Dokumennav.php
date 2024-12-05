<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelDokumennav;

class Dokumennav extends BaseController
{
    protected $ModelDokumennav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelDokumennav = new ModelDokumennav();
    }

    public function index()
    {
        $data['dokumen'] = $this->ModelDokumennav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen perencanaan";

        return view('v_dokumennav', $data);
    }
}
