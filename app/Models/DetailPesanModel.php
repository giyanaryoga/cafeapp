<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPesanModel extends Model
{
    protected $table = "DetailPesan";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_menu', 'qty', 'note', 'id_pesan'];
}
