<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    protected $kategoriModel;

    public function index()
    {
        $kategori = $this->kategoriModel->findAll();
        $data = [
            'title' => 'Daftar Kategori',
            'kategori' => $kategori
        ];
        return view('back/admin/kategori-menu', $data);
    }
}
