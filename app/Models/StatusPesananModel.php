<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusPesananModel extends Model
{
    protected $table = "StatusPesanan";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'deskripsi'];
}
