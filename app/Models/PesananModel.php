<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = "pesanan";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['id_customer', 'id_status', 'jumlah_harga'];
}
