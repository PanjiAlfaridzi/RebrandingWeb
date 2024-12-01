<?php

namespace App\Controllers;
use App\Models\ModelNelayan;

class Nelayan extends BaseController
{
    protected $ModelNelayan;
    public function __construct()
    {
       $this->ModelNelayan = new ModelNelayan();
    }
    public function index(): string
    {
        $data = [
            'judul' => 'Nelayan',
            'page' => 'v_Nelayan',
            'nelayan' => $this->ModelNelayan->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function InsertData(){
        $data = [
            'nama' => $this->request->getPost('nama'), 
            'alamat' => $this->request->getPost('alamat'), 
            'kota' => $this->request->getPost('kota')
        ];
        session()->setFlashdata('insert', 'Data Berhasil Ditambahkan');
        $this->ModelNelayan->InsertData($data);
        return redirect()->to('Nelayan');
    }

    public function UpdateData($id_nelayan){
        $data = [
            'id_nelayan' => $id_nelayan,
            'nama' => $this->request->getPost('nama'), 
            'alamat' => $this->request->getPost('alamat'), 
            'kota' => $this->request->getPost('kota')
        ];
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        $this->ModelNelayan->UpdateData($data);
        return redirect()->to('Nelayan');
    }

    public function DeleteData($id_nelayan){
        $data = [
            'id_nelayan' => $id_nelayan,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete');
        $this->ModelNelayan->DeleteData($data);
        return redirect()->to('Nelayan');
    }
}
