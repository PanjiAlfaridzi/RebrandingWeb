<?php

namespace App\Controllers;

use App\Models\ModelBerita;

class Berita extends BaseController
{
    protected $ModelBerita;
    public function __construct()
    {
        $this->ModelBerita = new ModelBerita();
    }
    public function index(): string
    {
        $data = [
            'judul' => 'Berita',
            'page' => 'berita/v_berita',
            'berita' => $this->ModelBerita->AllData(),
        ];
        return view('v_template_back_end', $data);
    }



    public function Input()
    {
        $data = [
            'judul' => 'Input Berita',
            'page' => 'berita/v_input',
            'berita' => $this->ModelBerita->AllData(),
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
            $folderTujuan = FCPATH . 'foto'; // Ganti dengan path folder yang diinginkan
            $fileName = $fileGambar->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileGambar->move($folderTujuan, $fileName);

            // Siapkan data untuk disimpan
            $data = [
                'judul_berita' => $this->request->getPost('judul_berita'),
                'isi_berita' => $this->request->getPost('isi_berita'),
                'gambar_berita' => $fileName // Simpan nama file ke database
            ];

            // Simpan data ke database
            $this->ModelBerita->InsertData($data);
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

        // Siapkan array data untuk update
        $data = [
            'id_berita' => $id_berita,
            'judul_berita' => $this->request->getPost('judul_berita'),
            'isi_berita' => $this->request->getPost('isi_berita'),
        ];

        // Jika ada file gambar yang diupload
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'foto'; // Ganti dengan path folder yang sesuai
            $fileName = $fileGambar->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileGambar->move($folderTujuan, $fileName);

            // Tambahkan nama file ke data yang akan diupdate
            $data['gambar_berita'] = $fileName;

            // Opsional: Hapus file lama jika ada (ambil nama file lama dari database)
            $beritaLama = $this->ModelBerita->find($id_berita); // Pastikan fungsi `find` ada di model Anda
            if ($beritaLama && $beritaLama['gambar_berita']) {
                $fileLama = $folderTujuan . '/' . $beritaLama['gambar_berita'];
                if (is_file($fileLama)) {
                    unlink($fileLama); // Hapus file lama
                }
            }
        }

        // Update data di database
        $this->ModelBerita->UpdateData($data);

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
        $this->ModelBerita->DeleteData($data);
        return redirect()->to('Berita');
    }
}
