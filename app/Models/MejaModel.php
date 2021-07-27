<?php

namespace App\Models;

use CodeIgniter\Model;

class MejaModel extends Model
{
    protected $table = "meja";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['nomor', 'deskripsi'];
}
