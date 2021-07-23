<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusMenuModel extends Model
{
    protected $table = "statusmenu";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'deskripsi'];
}
