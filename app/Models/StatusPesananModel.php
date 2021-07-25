<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusPesananModel extends Model
{
    protected $table = "statuspesanan";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['name', 'deskripsi'];
}
