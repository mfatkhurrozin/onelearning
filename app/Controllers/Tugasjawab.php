<?php

namespace App\Controllers;

use App\Models\TugasjawabModel;
use App\Models\TugasModel;

class Tugasjawab extends BaseController
{
    public function __construct()
    {
        $this->TugasjawabModel = new TugasjawabModel();
        $this->TugasModel = new TugasModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_tugas') ? $this->request->getVar('page_tugas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tugas = $this->TugasjawabModel->search($keyword);
        } else {
            $tugas = $this->TugasjawabModel;
        }
        $data = [
            'title' => 'Daftar Tugas',
            // 'tugas' => $this->TugasjawabModel->getTugas()
            'tugasjawab'  => $this->TugasjawabModel->paginate(4, 'tugasjawab'),
            'pager' => $this->TugasjawabModel->pager,
            'currentPage' => $currentPage
        ];

        return view('tugasjawab/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail tugas',
            'tugasjawab' => $this->TugasjawabModel->getTugasjawab($id)
        ];

        // jika data tugas tidak di temukan
        if (empty($data['tugasjawab'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul tugas' . $id . 'Tidak Ditemukan');
        }

        return view('tugasjawab/detail', $data);
    }

    public function tambah($id)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Tambah Data Tugas',
            'validation' => \Config\Services::validation(),
            'idtugas' => $this->TugasModel->find($id),
            'user' => $this->TugasjawabModel->getTugasjawab($id)
        ];


        return view('siswa/tugas/jawab/tambah', $data);
    }


    public function simpan()
    {
        //validasi input data
        if (!$this->validate([
            'no_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tugas wajib di isi'
                ]
            ]
        ])) {

            // menampilkan pesan kesalahan
            $validation = \Config\Services::validation();
            return redirect()->to('/tugasjawab/tambah')->withInput()->with('validation', $validation);
            // return redirect()->to('/tugasjawab/tambah')->withInput();
        }


        //mengambil gambar sampul
        $fileSampul = $this->request->getFile('file_siswa');

        //generate nama sampul random
        $namaSampul = $fileSampul->getName();

        //meminddahkan file sampul ke folder img
        $fileSampul->move('jwb', $namaSampul);

        $this->TugasjawabModel->save([
            'nama' => $this->request->getVar('nama'),
            'no_siswa' => $this->request->getVar('no_siswa'),
            'file_siswa' => $namaSampul,
            'id_tugas' => $this->request->getVar('id_tugas'),
            'id_user' => $this->request->getVar('id_user')
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Tugas Berhasil Dikirim');

        return redirect()->to('/siswatugas');
    }
}
