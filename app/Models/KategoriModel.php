<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = "kategorimenu";
    protected $useTimestamps = true;
    protected $returnType = "object";
    protected $allowedFields = ['name'];
}
