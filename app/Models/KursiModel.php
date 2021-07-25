<?php

namespace App\Models;

use CodeIgniter\Model;

class KursiModel extends Model
{
    protected $table = "kursi";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['nomor', 'deskripsi'];
}
