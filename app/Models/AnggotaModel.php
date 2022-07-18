<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model

{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];

    public function search($keyword)
    {
        return $this->table('user')->like('username',$keyword);
    }

    public function getAnggota($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}