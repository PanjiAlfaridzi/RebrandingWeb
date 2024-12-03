<?php
namespace App\Controllers;

use App\Models\ModelGallerynav;

class Gallerynav extends BaseController
{
    public function index()
    {
        // Load model
        $ModelGallerynav = new ModelGallerynav();

        // Get all gallery data
        $data['gallery'] = $ModelGallerynav->orderBy('tgl_galeri', 'DESC')->findAll();

        // Send page title
        $data['judul_galeri'] = "GALERI FOTO";

        // Load the view with the data
        return view('v_gallerynav', $data);
    }
}
