<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\Modellayanannav;

class Layanannav extends BaseController
{
    protected $Modellayanannav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->Modellayanannav = new Modellayanannav();
    }

    public function index()
    {
        $data['dokumen'] = $this->Modellayanannav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_layanannav', $data);
    }
}
