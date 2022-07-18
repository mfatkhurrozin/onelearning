<?php

namespace App\Controllers;

use App\Models\JawabanModel;

class Jawaban extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->JawabanModel = new JawabanModel();
        $this->db      = \Config\Database::connect();
    }

    // public function index()
    // {
    //     $model = new JawabanModel();
    //     $data['jawaban'] = $model->getJawaban();
    //     return view('jawaban/index', $data);
    // } 

    public function detail($id)
    {
        $builder = $this->db->table('jawaban');
        $builder->select('*');
        $builder->join('tugas', 'tugas.id = jawaban.id_tugas');
        $builder->where('tugas.id', $id);
        $query = $builder->get();
        $data = [
            'title' => 'Detail Tugas',
            'jawaban' => $query
        ];

        // jika data tugas tidak di temukan
        if (empty($data['jawaban'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jawaban' . $id . 'Tidak Ditemukan');
        }

        return view('guru/tugas/jawaban/detail', $data);
    }
}
