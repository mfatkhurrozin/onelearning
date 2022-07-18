<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model

{
    protected $table = 'tugas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'file', 'deskripsi', 'tanggal', 'submit'];

    public function search($keyword)
    {
        return $this->table('tugas')->like('judul', $keyword);
    }



    public function getTugas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
