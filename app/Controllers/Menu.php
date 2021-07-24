<?php

namespace App\Controllers;

use App\Models\MenuModel;

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

    public function detail($slug)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kategorimenu');
        $builder->select('name');
        $builder->join('menu', 'menu.id_kategori = kategorimenu.id');
        $query = $builder->get(null, $slug->menu['id'])->getResult();
        dd($query);
        // $m = $this->menuModel->findColumn('id_kategori');
        // $mk = $this->kategoriModel->where(['id' => $m])->find('name');
        $data = [
            'title' => 'Detail Menu',
            'menu' => $this->menuModel->getMenu($slug),
            'mk' => $query
        ];
        return view('back/admin/detail-menu', $data);
    }

    public function detailKategori($kategori)
    {
    }
}
