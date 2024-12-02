<?php

namespace App\Controllers;

use App\Models\ModelBerita;

class Home extends BaseController
{
    protected $ModelBerita;

    public function __construct()
    {
        $this->ModelBerita = new ModelBerita();
    }

    public function index(): string
    {
        $data = [
            'judul' => 'Home',
            'page' => 'v_home',
            'berita' => $this->ModelBerita->AllData()
        ];
        return view('v_template_front_end', $data);
    }
}
