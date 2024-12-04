<?php

namespace App\Controllers;

use App\Models\ModelProfil;

class Profil extends BaseController
{
    protected $ModelProfil;
    public function __construct()
    {
        $this->ModelProfil = new ModelProfil();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index(): string
    {
        $data = [
            'judul' => ' Dokumen Profil',
            'page' => 'profil/v_dokumen',
            'dokumen' => $this->ModelProfil->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input dokumen Profil',
            'page' => 'profil/v_input_dokumen',
            'dokumen' => $this->ModelProfil->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function InsertData()
    {
        // Ambil file yang diupload
        $fileDokumen = $this->request->getFile('file_dokumen');

        $fileDokumen = $this->request->getFile('file_dokumen'); // atau 'file_pdf'

        if ($fileDokumen == null) {
            session()->setFlashdata('error', 'File dokumen harus diupload');
            return redirect()->back();
        }

        if (!$fileDokumen->isValid()) {
            session()->setFlashdata('error', 'File tidak valid');
            return redirect()->back();
        }

        // Pastikan file valid
        if ($fileDokumen->isValid() && !$fileDokumen->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/fprofil'; // Ganti dengan path folder yang diinginkan
            $fileName = $fileDokumen->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileDokumen->move($folderTujuan, $fileName);

            // Siapkan data untuk disimpan dengan pembersihan tag HTML
            $data = [
                'judul_dokumen' => strip_tags($this->request->getPost('judul_dokumen')),
                'file_dokumen' => $fileName, // Simpan nama file ke database
                'tgl_dokumen' => date('Y-m-d'), // Tanggal sekarang
                'jam_dokumen' => date('H:i:s'), // Jam sekarang
            ];

            // Simpan data ke database
            $this->ModelProfil->InsertData($data);
            session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        } else {
            session()->setFlashdata('insert', 'Gambar tidak valid atau sudah dipindahkan');
        }

        return redirect()->to('Profil');
    }


    public function UpdateData($id_profil)
    {
        // Ambil file gambar dari form
        $fileDokumen = $this->request->getFile('file_dokumen');

        // Siapkan array data untuk update dengan pembersihan tag HTML
        $data = [
            'id_profil' => $id_profil,
            'judul_dokumen' => strip_tags($this->request->getPost('judul_dokumen')),
            'tgl_dokumen' => date('Y-m-d'), // Tanggal sekarang
            'jam_dokumen' => date('H:i:s'), // Jam sekarang
        ];

        // Jika ada file gambar yang diupload
        if ($fileDokumen && $fileDokumen->isValid() && !$fileDokumen->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/fprofil'; // Ganti dengan path folder yang sesuai
            $fileName = $fileDokumen->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileDokumen->move($folderTujuan, $fileName);

            // Tambahkan nama file ke data yang akan diupdate
            $data['file_dokumen'] = $fileName;

            // Opsional: Hapus file lama jika ada (ambil nama file lama dari database)
            $dokumenLama = $this->ModelProfil->find($id_profil); // Pastikan fungsi `find` ada di model Anda
            if ($dokumenLama && $dokumenLama['file_dokumen']) {
                $fileLama = $folderTujuan . '/' . $dokumenLama['file_dokumen'];
                if (is_file($fileLama)) {
                    unlink($fileLama); // Hapus file lama
                }
            }
        }

        // Update data di database
        $this->ModelProfil->UpdateData($data);

        // Berikan notifikasi ke pengguna
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to('Profil');
    }

    public function DeleteData($id_profil)
    {
        $data = [
            'id_profil' => $id_profil,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelProfil->DeleteData($data);
        return redirect()->to('Profil');
    }
}
