<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusMenuModel extends Model
{
    protected $table = "StatusMenu";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'deskripsi'];
}
