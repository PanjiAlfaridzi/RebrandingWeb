<?php

namespace App\Controllers;

use App\Models\ModelGaleri;

class Galeri extends BaseController
{
    protected $ModelGaleri;
    public function __construct()
    {
        $this->ModelGaleri = new ModelGaleri();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index(): string
    {
        $data = [
            'judul' => 'galeri',
            'page' => 'galeri/v_galeri',
            'galeri' => $this->ModelGaleri->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input galeri',
            'page' => 'galeri/v_input_galeri',
            'galeri' => $this->ModelGaleri->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function InsertData()
    {
        // Ambil file yang diupload
        $fileGaleri = $this->request->getFile('file_galeri');

        // Pastikan file valid
        if ($fileGaleri->isValid() && !$fileGaleri->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/igaleri'; // Ganti dengan path folder yang diinginkan
            $fileName = $fileGaleri->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileGaleri->move($folderTujuan, $fileName);

            // Siapkan data untuk disimpan dengan pembersihan tag HTML
            $data = [
                'judul_galeri' => strip_tags($this->request->getPost('judul_galeri')),
                'file_galeri' => $fileName, // Simpan nama file ke database
                'tgl_galeri' => date('Y-m-d'), // Tanggal sekarang
                'jam_galeri' => date('H:i:s'), // Jam sekarang
            ];

            // Simpan data ke database
            $this->ModelGaleri->InsertData($data);
            session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        } else {
            session()->setFlashdata('insert', 'Gambar tidak valid atau sudah dipindahkan');
        }

        return redirect()->to('galeri');
    }


    public function UpdateData($id_galeri)
    {
        // Ambil file gambar dari form
        $fileGaleri = $this->request->getFile('file_galeri');

        // Siapkan array data untuk update dengan pembersihan tag HTML
        $data = [
            'id_galeri' => $id_galeri,
            'judul_galeri' => strip_tags($this->request->getPost('judul_galeri')),
            'tgl_galeri' => date('Y-m-d'), // Tanggal sekarang
            'jam_galeri' => date('H:i:s'), // Jam sekarang
        ];

        // Jika ada file gambar yang diupload
        if ($fileGaleri && $fileGaleri->isValid() && !$fileGaleri->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/igaleri'; // Ganti dengan path folder yang sesuai
            $fileName = $fileGaleri->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileGaleri->move($folderTujuan, $fileName);

            // Tambahkan nama file ke data yang akan diupdate
            $data['file_galeri'] = $fileName;

            // Opsional: Hapus file lama jika ada (ambil nama file lama dari database)
            $galeriLama = $this->ModelGaleri->find($id_galeri); // Pastikan fungsi `find` ada di model Anda
            if ($galeriLama && $galeriLama['file_galeri']) {
                $fileLama = $folderTujuan . '/' . $galeriLama['file_galeri'];
                if (is_file($fileLama)) {
                    unlink($fileLama); // Hapus file lama
                }
            }
        }

        // Update data di database
        $this->ModelGaleri->UpdateData($data);

        // Berikan notifikasi ke pengguna
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to('Galeri');
    }

    public function DeleteData($id_galeri)
    {
        $data = [
            'id_galeri' => $id_galeri,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelGaleri->DeleteData($data);
        return redirect()->to('Galeri');
    }
}
