<?php

namespace App\Controllers;

class Visi extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Visi',
            'page' => 'v_visi'
        ];
        return view('v_visi', $data);
    }
}
