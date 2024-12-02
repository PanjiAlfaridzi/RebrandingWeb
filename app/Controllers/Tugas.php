<?php

namespace App\Controllers;

class Tugas extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Tugas',
            'page' => 'v_tugas'
        ];
        return view('v_tugas', $data);
    }
}
