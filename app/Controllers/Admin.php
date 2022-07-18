<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $db, $builder;

    public function __construct(){
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $data['title'] = 'Admin';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        $this->builder->select('users.id as userid, username, email, name, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.user_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();
        
        return view('admin/index', $data);
    }
    
}
