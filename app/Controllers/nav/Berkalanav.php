<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\ModelBerkalanav;

class Berkalanav extends BaseController
{
    protected $ModelBerkalanav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->ModelBerkalanav = new ModelBerkalanav();
    }

    public function index()
    {
        $data['dokumen'] = $this->ModelBerkalanav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_berkalanav', $data);
    }
}
