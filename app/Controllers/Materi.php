<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Materi extends BaseController
{
    public function __construct()
    {
        $this->MateriModel = new MateriModel();
    }

    public function index()
    {
        $currentPage =$this->request->getVar('page_materi') ? $this->request->getVar('page_materi'): 1;
        
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $materi =$this->MateriModel->search($keyword);
        }else{
            $materi =$this->MateriModel;
        
        }
        $data = [
            'title' => 'Daftar Materi',
            // 'materi' => $this->MateriModel->getMateri()
            'materi'  => $this->MateriModel->paginate(3,'materi'),
            'pager' =>$this->MateriModel->pager,
            'currentPage'=> $currentPage
        ];

        return view('guru/index', $data);
    }

    public function detail($id_materi)
    {
        $data = [
            'title' => 'Detail materi',
            'materi' => $this->MateriModel->getMateri($id_materi)
        ];

        // jika data materi tidak di temukan
        if (empty($data['materi'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul materi' . $id_materi . 'Tidak Ditemukan');
        }

        return view('guru/detail', $data);
    }

    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Tambah Data materi',
            'validation' => \Config\Services::validation()
        ];

        return view('guru/tambah', $data);
    }

    public function simpan()
    {
        //validasi input data
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[materi.judul]',
                'errors' => [
                    'required' => '{field} materi wajib di isi',
                    'is_unique' => '{field} materi sudah ada'
                ]
            ]
        ])) {

            //menampilkan pesan kesalahan
            //$validation = \Config\Services::validation();
            //return redirect()->to('/materi/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('/guru/tambah')->withInput();
        }

        //mengambil gambar sampul
        $fileSampul = $this->request->getFile('file');

        //generate nama sampul random
        $namaSampul = $fileSampul->getName();

        //meminddahkan file sampul ke folder mtr
        $fileSampul->move('mtr', $namaSampul);

        $this->MateriModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'file' => $namaSampul
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data Sudah Berhasil Ditambahkan');

        return redirect()->to('/materi');
    }

    public function hapus($id_materi)
    {
        //cari gambar berdasarkan id
        $materi = $this->MateriModel->find($id_materi);

        //cek gambar default (tidak boleh dihapus)
        if ($materi['file'] != 'default.jpg') {

            //hapus gambar di folder mtr
            unlink('mtr/' . $materi['file']);
        }

        $this->MateriModel->delete($id_materi);

        //flashdata pesan dihapus
        session()->setFlashdata('pesan', 'Data Anda Sudah Hilang!');

        return redirect()->to('/materi');
    }

    public function ubah($id_materi)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'title' => 'Ubah Data materi',
            'validation' => \Config\Services::validation(),
            'materi' => $this->MateriModel->getMateri($id_materi)
        ];

        return view('/materi/ubah', $data);
    }

    public function update($id_materi)
    {
        // validasi update
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} materi wajib di isi',
                ]
            ],
        ])) {

            //menampilkan pesan kesalahan
            //$validation = \Config\Services::validation();

            //return redirect()->to('materi/ubah/' . $id_materi)->withInput()->with('validation', $validation);
            return redirect()->to('materi/ubah/' . $id_materi)->withInput();
        }

        $fileSampul = $this->request->getFile('file');

        //cek gambar, tetap atau update
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate nama sampul
            $namaSampul = $fileSampul->getName();

            //memindahkan gambar
            $fileSampul->move('mtr', $namaSampul);

            //hapus gambar lama
            unlink('mtr/' . $this->request->getVar('sampulLama'));
        }

        $this->MateriModel->update($id_materi, [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'file' => $namaSampul
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data materi Sudah Di Rubah Ya!');

        return redirect()->to('/materi');
    }
}
