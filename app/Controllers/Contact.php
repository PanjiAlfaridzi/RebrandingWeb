<?php

namespace App\Controllers;

use App\Models\ModelContact;

class Contact extends BaseController
{
    public function index()
    {
        // Menetapkan variabel judul_contact
        $data = [
            'judul_contact' => "Contact Us" // Ganti dengan judul yang sesuai
        ];

        // Menyampaikan data ke view
        return view('v_contactform', $data);
    }

    public function submit()
    {
        $ModelContact = new ModelContact();

        date_default_timezone_set('Asia/Jakarta');

        // Ambil data dari form
        $data = [
            'nama'   => $this->request->getPost('nama'),
            'email'  => $this->request->getPost('email'),
            'pesan'  => $this->request->getPost('pesan'),
            'dibuat' => date('Y-m-d H:i:s'),
        ];

        // Validasi data menggunakan model
        if (!$ModelContact->validate($data)) {
            // Jika data tidak valid, tampilkan error
            session()->setFlashdata('error', 'Data yang Anda kirim tidak valid.');
            return redirect()->to(base_url('contact'));
        }

        // Simpan data ke database
        if ($ModelContact->save($data)) {
            // Jika data berhasil disimpan
            session()->setFlashdata('success', 'Pesan Anda telah berhasil dikirim!');
            return redirect()->to(base_url('contact'));
        } else {
            // Jika gagal simpan data
            session()->setFlashdata('error', 'Gagal mengirim pesan.');
            return redirect()->to(base_url('contact'));
        }
    }
}
