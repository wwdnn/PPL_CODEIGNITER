<?php

namespace App\Controllers;
use App\Models\M_Mahasiswa as M_Mahasiswa;
use CodeIgniter\HTTP\Request;

class c_Mahasiswa extends BaseController
{
    public function display()
    {
            $model = new M_Mahasiswa;
            $mahasiswa = $model->paginate(10);

            $data = [
                'mahasiswa' => $model->paginate(10, 'mahasiswa'),
                'pager' => $model->pager,
            ];

            return view('Mahasiswa/v_Display', $data);
    }

    public function inputMahasiswa()
    {
        return view('Mahasiswa/v_Input');
    }

    public function addMahasiswa()
    {
        $model = new M_Mahasiswa;

        // Pengecekan jika terdapat nim yang sama
        $nim = $this->request->getPost('NIM');
        $cek = $model->cekMahasiswa($nim);

        if ($cek) {
            return redirect()->to(base_url('mahasiswa/add'))->with('error', 'NIM sudah ada');
        }

        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur'),
        ];
        $model->addMahasiswa($data);
        return redirect()->to(base_url('mahasiswa'))->with('success', 'Data berhasil ditambahkan');
    }

    public function detailMahasiswa($nim)
    { 
        $model = new M_Mahasiswa;
        $mahasiswa = $model->getMahasiswa($nim);

        return view('Mahasiswa/v_Detail', compact('mahasiswa'));
    }

    public function deleteMahasiswa($nim)
    {
        $model = new M_Mahasiswa;
        $model->deleteMahasiswa($nim);

        return redirect()->to(base_url('mahasiswa'))->with('success', 'Data berhasil dihapus');
    }

    public function editMahasiswa()
    {
        $model = new M_Mahasiswa;

        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur'),
        ];
        
        $model->editMahasiswa($data);

        return redirect()->to(base_url('mahasiswa'))->with('success', 'Data berhasil diubah');
    }

    public function searchMahasiswa()
    {
        $session = session();
        $model = new M_Mahasiswa;

        $keyword = $this->request->getPost('keyword');
        
        $session->set('keyword', $keyword);
        $mahasiswa = $model->searchMahasiswa($keyword);

        return view('Mahasiswa/v_Display', compact('mahasiswa'));
    }
}