<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Siswamateri extends BaseController
{
    public function __construct()
    {
        $this->MateriModel = new MateriModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_materi') ? $this->request->getVar('page_materi') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $materi = $this->MateriModel->search($keyword);
        } else {
            $materi = $this->MateriModel;
        }
        $data = [
            'title' => 'Daftar Materi',
            // 'materi' => $this->MateriModel->getMateri()
            'materi'  => $this->MateriModel->paginate(5, 'materi'),
            'pager' => $this->MateriModel->pager,
            'currentPage' => $currentPage
        ];

        return view('/siswa/index', $data);
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

        return view('siswa/detail', $data);
    }
}
