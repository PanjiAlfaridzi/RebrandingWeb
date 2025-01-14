<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelHukumnav;

class Hukumnav extends BaseController
{
    protected $ModelHukumnav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelHukumnav = new ModelHukumnav();
    }

    public function index()
    {
        $data['dokumen'] = $this->ModelHukumnav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_hukumnav', $data);
    }
}
