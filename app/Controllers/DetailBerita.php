<?php

namespace App\Controllers;

use App\Models\ModelBerita;

class DetailBerita extends BaseController
{
    protected $ModelBerita;

    public function __construct()
    {
        $this->ModelBerita = new ModelBerita();
    }

    public function index($id_berita)
    {
        $data['berita'] = $this->ModelBerita->DetailBerita($id_berita);

        // Cek apakah berita ditemukan
        if (empty($data['berita'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['judul'] = 'Detail Berita';
        return view('berita/v_detail', $data); // Pastikan ini mengarah ke view yang benar
    }
}
