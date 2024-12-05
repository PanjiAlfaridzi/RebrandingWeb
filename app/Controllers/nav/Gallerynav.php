<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelGallerynav;

class Gallerynav extends BaseController
{
    protected $ModelGallerynav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelGallerynav = new ModelGallerynav();
    }

    public function index()
    {
        $data['gallery'] = $this->ModelGallerynav->orderBy('tgl_galeri', 'DESC')->findAll();
        $data['judul_galeri'] = "Dokumen perencanaan";

        return view('v_gallerynav', $data);
    }
}