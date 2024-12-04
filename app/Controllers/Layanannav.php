<?php

namespace App\Controllers;

use App\Models\ModelLayanannav;

class Layanannav extends BaseController
{
    protected $Layanannav;

    public function __construct()
    {
        $this->Layanannav = new ModelLayanannav();
    }

    public function index()
    {
        // Di controller
        $data = [
            'judul_dokumen' => 'Informasi layanan',
            'dokumen' => $this->Layanannav->findAll()  // Ubah key 'layanan' menjadi 'dokumen'
        ];
        return view('ppid/v_layanannav', $data);
    }
}

// Lanjutkan dengan pola yang sama untuk controller lainnya