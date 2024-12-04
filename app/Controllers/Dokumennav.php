<?php

namespace App\Controllers;

use App\Models\ModelDokumennav;

class Dokumennav extends BaseController
{
    public function index()
    {
        // Load model
        $ModelDokumennav = new ModelDokumennav();

        // Get all gallery data
        $data['dokumen'] = $ModelDokumennav->orderBy('tgl_dokumen', 'DESC')->findAll();

        // Send page title
        $data['judul_dokumen'] = "Dokumen perencanaan";


        // Load the view with the data
        return view('v_dokumennav', $data);
    }
}
