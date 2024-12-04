<?php

namespace App\Controllers;

use App\Models\ModelLayanan;

class Layanan extends BaseController
{
    protected $ModelLayanan;
    public function __construct()
    {
        $this->ModelLayanan = new ModelLayanan();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index(): string
    {
        $data = [
            'judul' => 'Layanan',
            'page' => 'layanan/v_dokumen',
            'layanan' => $this->ModelLayanan->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input dokumen',
            'page' => 'layanan/v_input_dokumen',
            'layanan' => $this->ModelLayanan->AllData(),
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
            $folderTujuan = FCPATH . 'image/flayanan'; // Ganti dengan path folder yang diinginkan
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
            $this->ModelLayanan->InsertData($data);
            session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        } else {
            session()->setFlashdata('insert', 'Gambar tidak valid atau sudah dipindahkan');
        }

        return redirect()->to('Layanan');
    }


    public function UpdateData($id_layanan)
    {
        // Ambil file gambar dari form
        $fileDokumen = $this->request->getFile('file_dokumen');

        // Siapkan array data untuk update dengan pembersihan tag HTML
        $data = [
            'id_layanan' => $id_layanan,
            'judul_dokumen' => strip_tags($this->request->getPost('judul_dokumen')),
            'tgl_dokumen' => date('Y-m-d'), // Tanggal sekarang
            'jam_dokumen' => date('H:i:s'), // Jam sekarang
        ];

        // Jika ada file gambar yang diupload
        if ($fileDokumen && $fileDokumen->isValid() && !$fileDokumen->hasMoved()) {
            // Tentukan folder tujuan dan nama file
            $folderTujuan = FCPATH . 'image/flayanan'; // Ganti dengan path folder yang sesuai
            $fileName = $fileDokumen->getRandomName(); // Mendapatkan nama file acak

            // Pindahkan file ke folder tujuan
            $fileDokumen->move($folderTujuan, $fileName);

            // Tambahkan nama file ke data yang akan diupdate
            $data['file_dokumen'] = $fileName;

            // Opsional: Hapus file lama jika ada (ambil nama file lama dari database)
            $dokumenLama = $this->ModelLayanan->find($id_layanan); // Pastikan fungsi `find` ada di model Anda
            if ($dokumenLama && $dokumenLama['file_dokumen']) {
                $fileLama = $folderTujuan . '/' . $dokumenLama['file_dokumen'];
                if (is_file($fileLama)) {
                    unlink($fileLama); // Hapus file lama
                }
            }
        }

        // Update data di database
        $this->ModelLayanan->UpdateData($data);

        // Berikan notifikasi ke pengguna
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to('Layanan');
    }

    public function DeleteData($id_layanan)
    {
        $data = [
            'id_layanan' => $id_layanan,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelLayanan->DeleteData($data);
        return redirect()->to('Layanan');
    }
}
