<?php

namespace App\Controllers;

class Role extends BaseController
{
    public function index()
    {
        $role = $this->roleModel->findAll();
        $data = [
            'title' => 'Daftar Role',
            'role' => $role
        ];
        return view('back/admin/role', $data);
    }
}
