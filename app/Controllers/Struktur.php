<?php

namespace App\Controllers;

class Struktur extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Struktur',
            'page' => 'v_struktur'
        ];
        return view('v_struktur', $data);
    }
}
