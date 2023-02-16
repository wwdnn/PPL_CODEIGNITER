<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\m_Pegawai;

class c_Pegawai extends BaseController
{
    public function inputPegawai()
    {
        $data['validation'] = \Config\Services::validation();
        return view('pegawai/v_FormPegawai');
    }

    public function tambahPegawai()
    {  
        $data = [
            'nim' => $this->request->getPost('nim'),    
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'noTelepon' => $this->request->getPost('noTelepon'),
            'email' => $this->request->getPost('email'),
            'pendidikan' => $this->request->getPost('pendidikan'),
        ];

        // rules validation data
        $rules = [
            'nim' => 'required|numeric|min_length[9]|max_length[9]',
            'nama' => 'required|alpha_space',
            'jk' => 'required|alpha_space',
            'noTelepon' => 'required|numeric|min_length[10]|max_length[13]',
            'email' => 'required|valid_email',
            'pendidikan' => 'required|alpha_space',
        ]; 

        // error message
        $errors = [
            
            // nim error message
            'nim' => [
                'required' => 'NIM harus diisi',
                'numeric' => 'NIM harus berupa angka',
                'min_length' => 'NIM harus berjumlah 9 angka',
                'max_length' => 'NIM harus berjumlah 9 angka',
            ],

            // nama error message
            'nama' => [
                'required' => 'Nama harus diisi',
                'alpha_space' => 'Nama harus berupa huruf',
            ],

            // jk error message
            'jk' => [
                'required' => 'Jenis Kelamin harus diisi',
                'alpha_space' => 'Jenis Kelamin harus berupa huruf',
            ],

            // noTelepon error message
            'noTelepon' => [
                'required' => 'No Telepon harus diisi',
                'numeric' => 'No Telepon harus berupa angka',
                'min_length' => 'No Telepon harus berjumlah 10 angka',
                'max_length' => 'No Telepon harus berjumlah 13 angka',
            ],

            // email error message
            'email' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
            ],

            // pendidikan error message
            'pendidikan' => [
                'required' => 'Pendidikan harus diisi',
                'alpha_space' => 'Pendidikan harus berupa huruf',
            ],
        ];


        // validate data
        if (!$this->validate($rules, $errors)) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // insert data to database
        $model = new m_Pegawai();
        $model->tambahPegawai($data);

        return redirect()->to('/pegawai/input')->with('success', 'Data berhasil ditambahkan');
}
}
