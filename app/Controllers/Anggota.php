<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    public function __construct()
    {
        $this->AnggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $currentPage =$this->request->getVar('page_anggota') ? $this->request->getVar('page_anggota'): 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $anggota =$this->AnggotaModel->search($keyword);
        }else{
            $anggota =$this->AnggotaModel;
        }
        $data = [
            'title' => 'Daftar Anggota',
           // 'anggota' => $this->AnggotaModel->getAnggota()
            'anggota' =>$anggota->paginate(6,'anggota'),
            'pager'  => $this->AnggotaModel->pager,
            'currentPage'=> $currentPage
        ];

        return view('anggota/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Anggota',
            'anggota' => $this->AnggotaModel->getAnggota($id)
        ];

        return view('anggota/detail', $data);
    }
    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data =[
            'title' => 'Tambah Anggota',
            'validation' => \Config\Services::validation()
        ];

        return view('anggota/tambah', $data);
    }
    public function simpan()
    {
        //validasi input data
        if (!$this->validate([
            'nama' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} anggota wajib di isi'
                ]
           
            ]
        ])){
            //menmapilkan pesan kesalahan
            $validation = \Config\Services::validation();

            return redirect()->to('/anggota/tambah')->withInput()->with
            ('validation',$validation);
        }
        
        $this->AnggotaModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor' => $this->request->getVar('nomor'),
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data sudah Berhasil Ditambahkan');

        return redirect()->to('/anggota');
    }
    public function hapus($id)
    {
        $this->AnggotaModel->delete($id);

        //flashdata pesan dihapus
        session()->setFlashdata('pesan', 'Data Sudah Terhapus!');

        return redirect()->to('/anggota');
    }
    public function ubah($id)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Ubah Data anggota',
            'validation' => \Config\Services::validation(),
            'anggota' => $this->AnggotaModel->getAnggota($id)
        ];

        return view('anggota/ubah', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'nama' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} anggota wajib di isi'
                ]
            ]
        ])){
           
            //menmapilkan pesan kesalahan
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation',$validation);
        }
       
        $this->AnggotaModel->update($id, [
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor' => $this->request->getVar('nomor'),
        ]);

        //flashdata pesan dihapus
        session()->setFlashdata('pesan', 'Data Anggota Sudah Dirubah Lho!');

        return redirect()->to('/anggota');
    }
}