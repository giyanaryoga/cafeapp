<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = "menu";
    protected $useTimestamps = true;
    protected $allowedFields = ['slug', 'namaMenu', 'harga', 'gambar', 'id_kategori', 'id_status'];

    public function getMenu($slug = false)
    {
        if ($slug == false) {
            return $this->paginate(3, 'menu');
        }

        return $this->join('kategorimenu', 'kategorimenu.id = menu.id_kategori')
            ->join('statusmenu', 'statusmenu.id = menu.id_status')
            ->where(['slug' => $slug])
            ->first();
    }
}
