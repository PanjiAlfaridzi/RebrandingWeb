<?php

namespace App\Controllers\nav;

use App\Controllers\BaseController;  // tambahkan ini
use App\Models\nav\Modelkecualinav;

class Kecualinav extends BaseController
{
    protected $Modelkecualinav; // sebaiknya jadikan property class

    public function __construct()
    {
        // inisialisasi di constructor
        $this->Modelkecualinav = new Modelkecualinav();
    }

    public function index()
    {
        $data['dokumen'] = $this->Modelkecualinav->orderBy('tgl_dokumen', 'DESC')->findAll();
        $data['judul_dokumen'] = "Dokumen informasi berkala";

        return view('ppid/v_kecualinav', $data);
    }
}
