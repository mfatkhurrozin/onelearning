<?php

namespace App\Models;

use CodeIgniter\Model;

class JawabanModel extends Model

{
    // protected $table = 'jawaban';
    // protected $primaryKey = 'id';
    // // protected $allowedFields = ['jwb','id_tugas'];

    // // public function getJawaban($idjawaban = false)
    // // {
    // //     if ($idjawaban == false) {
    // //         return $this->findAll();
    // //     }

    // //     return $this->where(['id' => $idjawaban])->first();
    // // }


    public function nilaijoin($id)
    {
        return $this->db->table('tugas')
            ->join('jawaban', 'tugas.id=jawaban.id_tugas')
            ->where('jawaban.id_tugas', $id)
            ->get()->getResult();
    }
}
