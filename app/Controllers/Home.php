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
        // Konfigurasi pagination
        $page = $this->request->getVar('page') ?? 1;
        $perPage = 6; // Jumlah berita per halaman
        $total = $this->ModelBerita->countAllResults();
        
        $data = [
            'judul' => 'Home',
            'page' => 'v_home',
            'berita' => $this->ModelBerita->paginate($perPage, 'default', $page),
            'pager' => $this->ModelBerita->pager,
            'pagination_links' => $this->ModelBerita->pager->links()
        ];
        return view('v_template_front_end', $data);
    }
}
