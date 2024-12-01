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

    public function Input(){
        $data = [
            'judul' => 'Input Berita',
            'page' => 'berita/v_input',
            'berita' => $this->ModelBerita->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function InsertData(){
        $data = [
            'judul_berita' => $this->request->getPost('judul_berita'), 
            'isi_berita' => $this->request->getPost('isi_berita'), 
            'gambar_berita' => $this->request->getPost('gambar_berita')
        ];
        session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        $this->ModelBerita->InsertData($data);
        return redirect()->to('Berita');
    }

    public function UpdateData($id_berita){
        $data = [
            'id_berita' => $id_berita,
            'judul_berita' => $this->request->getPost('judul_berita'), 
            'isi_berita' => $this->request->getPost('isi_berita'), 
            'gambar_berita' => $this->request->getPost('gambar_berita')
        ];
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        $this->ModelBerita->UpdateData($data);
        return redirect()->to('Berita');
    }

    public function DeleteData($id_berita){
        $data = [
            'id_berita' => $id_berita,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelBerita->DeleteData($data);
        return redirect()->to('Berita');
    }

}
