<?php

namespace App\Controllers;

use App\Models\ModelKecualinav;

class Kecualinav extends BaseController
{
    protected $Kecualinav;

    public function __construct()
    {
        $this->Kecualinav = new ModelKecualinav();
    }

    public function index()
    {
        $data = [
            'judul_dokumen' => 'Informasi dikecualikan',
            'dokumen' => $this->Kecualinav->findAll()
        ];
        return view('ppid/v_kecualinav', $data);
    }
}

// Lanjutkan dengan pola yang sama untuk controller lainnya