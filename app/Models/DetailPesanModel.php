<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPesanModel extends Model
{
    protected $table = "detailpesan";
    protected $useTimestamps = true;
    protected $returnType = "object";
    protected $allowedFields = ['id_menu', 'qty', 'note', 'id_pesan'];
}
