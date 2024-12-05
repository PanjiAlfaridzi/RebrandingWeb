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

    protected function formatBeritaContent($content)
    {
        // Membersihkan spasi berlebih
        $content = preg_replace('/\s+/', ' ', $content);

        // Membersihkan line breaks berlebih
        $content = preg_replace('/[\r\n]+/', "\n", $content);

        // Mengkonversi line breaks menjadi paragraf HTML dengan tambahan <br>
        $paragraphs = explode("\n", $content);
        $formatted = '';
        foreach ($paragraphs as $paragraph) {
            if (trim($paragraph) !== '') {
                $formatted .= '<p>' . trim($paragraph) . '</p><br>'; // Menambahkan <br> setelah setiap paragraf
            }
        }

        return $formatted;
    }

    public function index($id_berita)
    {
        $data['berita'] = $this->ModelBerita->DetailBerita($id_berita);

        // Cek apakah berita ditemukan
        if (empty($data['berita'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Format isi berita sebelum ditampilkan
        $data['berita']['isi_berita'] = $this->formatBeritaContent($data['berita']['isi_berita']);

        $data['judul'] = 'Berita terkini';
        $data['type_berita'] = 'Artikel terkini';
        return view('admin/berita/v_detail', $data);
    }
}