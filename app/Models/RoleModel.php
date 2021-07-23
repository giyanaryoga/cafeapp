<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = "role";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_role'];
}
