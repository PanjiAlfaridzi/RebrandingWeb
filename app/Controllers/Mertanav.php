<?php

namespace App\Controllers;

use App\Models\ModelMertanav;  // Pastikan import ini benar

class Mertanav extends BaseController
{
    protected $Mertanav;

    public function __construct()
    {
        // Perbaiki ini - gunakan ModelMertanav bukan Mertanav
        $this->Mertanav = new ModelMertanav();
    }

    public function index()
    {
        $data = [
            'judul_dokumen' => 'Informasi serta merta',
            'dokumen' => $this->Mertanav->findAll()
        ];
        return view('ppid/v_mertanav', $data);
    }
}
