<?php

namespace App\Controllers;

use App\Models\ModelProfilnav;  // Pastikan import ini benar

class Profilnav extends BaseController
{
    protected $Mertanav;

    public function __construct()
    {
        // Perbaiki ini - gunakan ModelMertanav bukan Mertanav
        $this->Mertanav = new ModelProfilnav();
    }

    public function index()
    {
        $data = [
            'judul_dokumen' => 'Informasi profil ppid',
            'dokumen' => $this->Mertanav->findAll()
        ];
        return view('ppid/v_profilnav', $data);
    }
}
// Lanjutkan dengan pola yang sama untuk controller lainnya