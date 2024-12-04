<?php

namespace App\Controllers;

use App\Models\ModelSaatnav;

class Saatnav extends BaseController
{
    protected $ModelSaatnav;

    public function __construct()
    {
        $this->ModelSaatnav = new ModelSaatnav();
    }

    public function index()
    {
        $data = [
            'judul_dokumen' => 'Informasi saat',
            'dokumen' => $this->ModelSaatnav->findAll()
        ];
        return view('ppid/v_saatnav', $data);
    }
}

// Lanjutkan dengan pola yang sama untuk controller lainnya