<?php

namespace App\Controllers;

class StatusMenu extends BaseController
{
    protected $statusMenuModel;

    public function index()
    {
        $statusMenu = $this->statusMenuModel->findAll();
        $data = [
            'title' => 'Daftar Status Menu',
            'statusMenu' => $statusMenu
        ];
        return view('back/admin/statusMenu', $data);
    }
}
