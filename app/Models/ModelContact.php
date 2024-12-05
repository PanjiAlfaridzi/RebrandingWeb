<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelContact extends Model
{
    protected $table      = 'tbl_contact';    // Pastikan nama tabelnya benar
    protected $primaryKey = 'id';             // Pastikan primary key sesuai
    protected $useAutoIncrement = true;       // Gunakan auto increment pada ID

    // Kolom yang boleh diisi
    protected $allowedFields = ['nama', 'email', 'pesan', 'dibuat'];

    // Validasi data jika perlu
    protected $validationRules = [
        'nama'  => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email',
        'pesan' => 'required|min_length[5]'
    ];

    // Pesan validasi jika ada error
    protected $validationMessages = [
        'nama'  => [
            'required' => 'Nama wajib diisi.',
            'min_length' => 'Nama terlalu pendek.',
        ],
        'email' => [
            'required' => 'Email wajib diisi.',
            'valid_email' => 'Email tidak valid.',
        ],
        'pesan' => [
            'required' => 'Pesan wajib diisi.',
            'min_length' => 'Pesan terlalu pendek.',
        ],
    ];

    // Set waktu pembuatan dan update secara otomatis
    protected $createdField  = 'dibuat'; 
    protected $updatedField  = 'dibuat'; 
}
