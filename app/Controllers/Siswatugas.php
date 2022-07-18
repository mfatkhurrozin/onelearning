<?php

namespace App\Controllers;

use App\Models\TugasModel;

class Siswatugas extends BaseController
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

        return view('siswa/tugas/index', $data);
    }

    public function detail($id_tugas)
    {
        $data = [
            'title' => 'Detail tugas',
            'tugas' => $this->TugasModel->getTugas($id_tugas)
        ];

        // jika data tugas tidak di temukan
        if (empty($data['tugas'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul tugas' . $id_tugas . 'Tidak Ditemukan');
        }

        return view('siswa/tugas/detail', $data);
    }
}
