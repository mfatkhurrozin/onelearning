<?php

namespace App\Controllers;

use App\Models\TugasModel;

class Tugas extends BaseController
{
    public function __construct()
    {
        $this->TugasModel = new TugasModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_tugas') ? $this->request->getVar('page_tugas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tugas = $this->TugasModel->search($keyword);
        } else {
            $tugas = $this->TugasModel;
        }


        $data = [
            'title' => 'Daftar Tugas',
            // 'tugas' => $this->TugasModel->getTugas()
            'tugas'  => $this->TugasModel->orderBy("judul", "asc")->paginate(4, 'tugas'),
            'pager' => $this->TugasModel->pager,
            'currentPage' => $currentPage
        ];

        return view('guru/tugas/index', $data);
    }

    public function detail($id_tugas)
    {
        $data = [
            'title' => 'Detail tugas',
            'tugas' => $this->TugasModel->getTugas($id_tugas),
            'jawaban' => $this->TugasModel->find()
        ];

        // jika data tugas tidak di temukan
        if (empty($data['tugas'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul tugas' . $id_tugas . 'Tidak Ditemukan');
        }

        return view('/guru/tugas/detail', $data);
    }

    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Tambah Data Tugas',
            'validation' => \Config\Services::validation()
        ];

        return view('/guru/tugas/tambah', $data);
    }

    public function simpan()
    {
        //validasi input data
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[tugas.judul]',
                'errors' => [
                    'required' => '{field} tugas wajib di isi',
                    'is_unique' => '{field} tugas sudah ada'
                ]
            ]
        ])) {

            //menampilkan pesan kesalahan
            //$validation = \Config\Services::validation();
            //return redirect()->to('/tugas/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('/tugas/tambah')->withInput();
        }

        //mengambil gambar sampul
        $fileSampul = $this->request->getFile('file');

        //generate nama sampul random
        $namaSampul = $fileSampul->getName();

        //meminddahkan file sampul ke folder img
        $fileSampul->move('tgs', $namaSampul);

        $this->TugasModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'file' => $namaSampul,
            'tanggal' => $this->request->getVar('tanggal')
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Tugas Berhasil Ditambahkan');

        return redirect()->to('/tugas');
    }


    public function hapus($id_tugas)
    {
        //cari gambar berdasarkan id
        $tugas = $this->TugasModel->find($id_tugas);

        //cek gambar default (tidak boleh dihapus)
        if ($tugas['file'] != 'default.jpg') {

            //hapus gambar di folder img
            unlink('tgs/' . $tugas['file']);
        }

        $this->TugasModel->delete($id_tugas);

        //flashdata pesan dihapus
        session()->setFlashdata('pesan', 'Tugas Berhasil Dihapus');

        return redirect()->to('/tugas');
    }

    public function ubah($id_tugas)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Ubah Data tugas',
            'validation' => \Config\Services::validation(),
            'tugas' => $this->TugasModel->getTugas($id_tugas)
        ];

        return view('guru/tugas/ubah', $data);
    }

    public function update($id_tugas)
    {
        // validasi update
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tugas wajib di isi',
                ]
            ],
        ])) {

            //menampilkan pesan kesalahan
            //$validation = \Config\Services::validation();

            //return redirect()->to('tugas/ubah/' . $id_tugas)->withInput()->with('validation', $validation);
            return redirect()->to('tugas/ubah/' . $id_tugas)->withInput();
        }

        $fileSampul = $this->request->getFile('file');

        //cek gambar, tetap atau update
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate nama sampul
            $namaSampul = $fileSampul->getName();

            //memindahkan gambar
            $fileSampul->move('tgs', $namaSampul);

            //hapus gambar lama
            unlink('tgs/' . $this->request->getVar('sampulLama'));
        }

        $this->TugasModel->update($id_tugas, [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'file' => $namaSampul,
            'tanggal' => $this->request->getVar('tanggal')
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Tugas Berhasil Dirubah');

        return redirect()->to('/tugas');
    }
}
