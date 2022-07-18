<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model

{
    protected $table = 'materi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'file'];

    public function search($keyword)
    {
        return $this->table('materi')->like('judul', $keyword);
    }

    public function getMateri($idmateri = false)
    {
        if ($idmateri == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $idmateri])->first();
    }
}
