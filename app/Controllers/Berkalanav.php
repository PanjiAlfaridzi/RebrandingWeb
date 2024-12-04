<?php

namespace App\Controllers;

use App\Models\ModelBerkalanav;

class Berkalanav extends BaseController
{
    protected $ModelBerkalanav;

    public function __construct()
    {
        $this->ModelBerkalanav = new ModelBerkalanav();
    }

    public function index()
    {
        $data = [
            'judul_dokumen' => 'Informasi Berkala',
            'dokumen' => $this->ModelBerkalanav->findAll()
        ];
        return view('ppid/v_berkalanav', $data);
    }
}

// Lanjutkan dengan pola yang sama untuk controller lainnya