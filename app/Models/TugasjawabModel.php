<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasjawabModel extends Model

{
    protected $table = 'jawaban';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no_siswa', 'file_siswa', 'id_tugas', 'id_user', 'nama'];

    // public function getTugasjawab($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['id' => $id])->first();
    // }

    public function getTugasjawab($id)
    {
        // return $this->db->table('tugas')
        //     ->join('jawaban', 'tugas.id=jawaban.id_tugas')
        //     ->where('jawaban.id_tugas', $id)
        //     ->get()->getResult();

        return $this->db->table('users')
            ->get()->getResult();
    }
}
