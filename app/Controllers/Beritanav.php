<?php

namespace App\Controllers;

use App\Models\ModelBeritanav;

class Beritanav extends BaseController
{
    protected $ModelBeritanav;
    public function __construct()
    {
        $this->ModelBeritanav = new ModelBeritanav();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index(): string
    {
        // Ambil nomor halaman dari URL, default adalah 1
        $page = $this->request->getVar('page') ? (int)$this->request->getVar('page') : 1;
        $limit = 4; // Ubah dari 6 menjadi 4
        $offset = ($page - 1) * $limit;

        // Ambil total berita
        $total_berita = $this->ModelBeritanav->countAllResults();

        // Ambil berita yang akan ditampilkan sesuai dengan limit dan offset
        $berita = $this->ModelBeritanav->orderBy('tgl_berita', 'DESC')->findAll($limit, $offset);

        // Hitung total halaman
        $total_pages = ceil($total_berita / $limit);

        $data = [
            'judul' => 'Berita',
            'page' => 'berita/v_berita',
            'berita' => $berita,
            'current_page' => $page,
            'total_pages' => $total_pages,
        ];
        return view('v_Beritanav', $data);
    }

    public function search(): string
    {
        $query = $this->request->getVar('query');
        $berita = [];

        if ($query) {
            $berita = $this->ModelBeritanav->like('judul_berita', $query)
                                         ->orLike('isi_berita', $query)
                                         ->orderBy('tgl_berita', 'DESC')
                                         ->findAll();
        }

        $data = [
            'judul' => 'Hasil Pencarian',
            'page' => 'berita/v_berita',
            'berita' => $berita,
            'query' => $query,
        ];

        return view('v_Beritanav', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input Berita',
            'page' => 'berita/v_input',
            'berita' => $this->ModelBeritanav->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function InsertData()
    {
        // Ambil file yang diupload
        $fileGambar = $this->request->getFile('gambar_berita');

        // Pastikan file valid
        if ($fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/iberita'; // Ganti dengan path folder yang diinginkan
            $fileName = $fileGambar->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileGambar->move($folderTujuan, $fileName);

            // Siapkan data untuk disimpan dengan pembersihan tag HTML
            $data = [
                'judul_berita' => strip_tags($this->request->getPost('judul_berita')),
                'isi_berita' => strip_tags($this->request->getPost('isi_berita')),
                'gambar_berita' => $fileName, // Simpan nama file ke database
                'tgl_berita' => date('Y-m-d'), // Tanggal sekarang
                'jam_berita' => date('H:i:s'), // Jam sekarang
            ];

            // Simpan data ke database
            $this->ModelBeritanav->InsertData($data);
            session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        } else {
            session()->setFlashdata('insert', 'Gambar tidak valid atau sudah dipindahkan');
        }

        return redirect()->to('Berita');
    }

    public function UpdateData($id_berita)
    {
        // Ambil file gambar dari form
        $fileGambar = $this->request->getFile('gambar_berita');

        // Siapkan array data untuk update dengan pembersihan tag HTML
        $data = [
            'id_berita' => $id_berita,
            'judul_berita' => strip_tags($this->request->getPost('judul_berita')),
            'isi_berita' => strip_tags($this->request->getPost('isi_berita')),
            'tgl_berita' => date('Y-m-d'), // Tanggal sekarang
            'jam_berita' => date('H:i:s'), // Jam sekarang
        ];

        // Jika ada file gambar yang diupload
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/iberita'; // Ganti dengan path folder yang sesuai
            $fileName = $fileGambar->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileGambar->move($folderTujuan, $fileName);

            // Tambahkan nama file ke data yang akan diupdate
            $data['gambar_berita'] = $fileName;

            // Opsional: Hapus file lama jika ada (ambil nama file lama dari database)
            $beritaLama = $this->ModelBeritanav->find($id_berita); // Pastikan fungsi `find` ada di model Anda
            if ($beritaLama && $beritaLama['gambar_berita']) {
                $fileLama = $folderTujuan . '/' . $beritaLama['gambar_berita'];
                if (is_file($fileLama)) {
                    unlink($fileLama); // Hapus file lama
                }
            }
        }

        // Update data di database
        $this->ModelBeritanav->UpdateData($data);

        // Berikan notifikasi ke pengguna
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to('Berita');
    }

    public function DeleteData($id_berita)
    {
        $data = [
            'id_berita' => $id_berita,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelBeritanav->DeleteData($data);
        return redirect()->to('Berita');
    }
}
