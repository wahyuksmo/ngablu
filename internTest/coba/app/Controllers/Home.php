<?php

namespace App\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Kontrak;

class Home extends BaseController
{


    public function __construct()
    {
        $this->kar = new Karyawan();
    }

    public function index()
    {

        $data = [
            'title' => 'Home',
            'karyawan' => $this->kar->tampildata()
        ];

        return view('karywan/index.php', $data);
    }


    public function create()
    {

        $kon = new Kontrak();
        $kar = new Jabatan();

        $data = [
            'title' => 'Tambah data',
            'data'  => $this->kar->tampildata(),
            'kontrak' => $kon->tampildata(),
            'karyawan' => $kar->tampildata(),
            'validation' => \Config\Services::validation()
        ];

        return view('karywan/create', $data);
    }


    public function save()
    {


        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/create')->withInput();
        }

        $this->kar->save([
            'id_jabatan' => $this->request->getVar('jabatan'),
            'id_kontrak' => $this->request->getVar('kontrak'),
            'nama_pegawai' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan');
        return redirect()->to('/');
    }

    public function delete($id_pegawai)
    {
        $this->kar->delete($id_pegawai);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/');
    }


    public function edit($id)
    {
        $kon = new Kontrak();
        $kar = new Jabatan();

        $ambildata = $this->kar->ambilid($id);
        
         if(count($ambildata->getResultArray()) > 0) {
            $row = $ambildata->getRowArray();
         }

        $data = [
            'title' => 'Ubah data',
            'data'  => $row,
            'kontrak' => $kon->tampildata(),
            'karyawan' => $kar->tampildata(),
            'validation' => \Config\Services::validation()
        ];

        return view('karywan/edit', $data);
    }


    public function update($id) {


        $this->kar->save([
            'id_pegawai' => $this->request->getVar('id'),
            'id_jabatan' => $this->request->getVar('jabatan'),
            'id_kontrak' => $this->request->getVar('kontrak'),
            'nama_pegawai' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di ubah');
        return redirect()->to('/');
    }


}
