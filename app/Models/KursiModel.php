<?php

namespace App\Models;

use CodeIgniter\Model;

class KursiModel extends Model
{
    protected $table = "kursi";
    protected $useTimestamps = true;
    protected $allowedFields = ['nomor', 'deskripsi'];
}
