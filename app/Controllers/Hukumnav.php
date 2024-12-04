<?php

namespace App\Controllers;

use App\Models\ModelHukumnav;

class Hukumnav extends BaseController
{
    protected $ModelHukumnav;

    public function __construct()
    {
        $this->ModelHukumnav = new ModelHukumnav();
    }

    public function index()
    {
        $data = [
            'judul_dokumen' => 'Informasi hukum',
            'dokumen' => $this->ModelHukumnav->findAll()
        ];
        return view('ppid/v_hukumnav', $data);
    }
}

// Lanjutkan dengan pola yang sama untuk controller lainnya