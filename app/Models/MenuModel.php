<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = "menu";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['slug', 'namaMenu', 'harga', 'gambar', 'id_kategori', 'id_status'];

    public function getMenu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
