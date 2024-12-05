<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelMertanav;

class Mertanav extends BaseController
{
    protected $ModelMertanav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelMertanav = new ModelMertanav();
    }

    public function index()
    {
        $data['dokumen'] = $this->ModelMertanav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_mertanav', $data);
    }
}
