<?php

namespace App\Controllers;

class Menu extends BaseController
{
    protected $menuModel;
    protected $kategoriModel;

    // public function __construct()
    // {
    //     $this->MenuModel = new MenuModel();
    //     $this->KategoriModel = new KategoriModel();
    // }

    public function index()
    {
        $kategori = $this->kategoriModel;
        // $menu = $this->MenuModel->findAll();
        $data = [
            'title' => 'Daftar Menu',
            'kategori' => $kategori,
            'menu' => $this->menuModel->getMenu()
        ];
        return view('back/admin/menu', $data);
    }
}
