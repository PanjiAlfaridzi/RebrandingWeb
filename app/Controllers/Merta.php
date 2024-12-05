<?php

namespace App\Controllers;

use App\Models\ModelMerta;

class Merta extends BaseController
{
    protected $ModelMerta;
    public function __construct()
    {
        $this->ModelMerta = new ModelMerta();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index(): string
    {
        $data = [
            'judul' => 'Dokumen merta',
            'page' => 'admin/admindokumen/merta/v_dokumen',
            'dokumen' => $this->ModelMerta->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input dokumen',
            'page' => 'admin/admindokumen/merta/v_input_dokumen',
            'dokumen' => $this->ModelMerta->AllData(),
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
            $folderTujuan = FCPATH . 'image/fmerta'; // Ganti dengan path folder yang diinginkan
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
            $this->ModelMerta->InsertData($data);
            session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        } else {
            session()->setFlashdata('insert', 'Gambar tidak valid atau sudah dipindahkan');
        }

        return redirect()->to('Merta');
    }


    public function UpdateData($id_merta)
    {
        // Ambil file gambar dari form
        $fileDokumen = $this->request->getFile('file_dokumen');

        // Siapkan array data untuk update dengan pembersihan tag HTML
        $data = [
            'id_merta' => $id_merta,
            'judul_dokumen' => strip_tags($this->request->getPost('judul_dokumen')),
            'tgl_dokumen' => date('Y-m-d'), // Tanggal sekarang
            'jam_dokumen' => date('H:i:s'), // Jam sekarang
        ];

        // Jika ada file gambar yang diupload
        if ($fileDokumen && $fileDokumen->isValid() && !$fileDokumen->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/fdokumen'; // Ganti dengan path folder yang sesuai
            $fileName = $fileDokumen->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileDokumen->move($folderTujuan, $fileName);

            // Tambahkan nama file ke data yang akan diupdate
            $data['file_dokumen'] = $fileName;

            // Opsional: Hapus file lama jika ada (ambil nama file lama dari database)
            $dokumenLama = $this->ModelMerta->find($id_merta); // Pastikan fungsi `find` ada di model Anda
            if ($dokumenLama && $dokumenLama['file_dokumen']) {
                $fileLama = $folderTujuan . '/' . $dokumenLama['file_dokumen'];
                if (is_file($fileLama)) {
                    unlink($fileLama); // Hapus file lama
                }
            }
        }

        // Update data di database
        $this->ModelMerta->UpdateData($data);

        // Berikan notifikasi ke pengguna
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to('Merta');
    }

    public function DeleteData($id_merta)
    {
        $data = [
            'id_merta' => $id_merta,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelMerta->DeleteData($data);
        return redirect()->to('Merta');
    }
}
