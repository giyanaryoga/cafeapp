<?php

namespace App\Controllers;

class User extends BaseController
{
    public function login()
    {
        return view('back/auth/login');
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;
        $data = [
            'title' => 'Data User',
            'user' => $this->userModel->paginate(3, 'user'),
            'pager' => $this->userModel->pager,
            'current' => $currentPage
        ];
        return view('back/admin/user', $data);
    }
}
