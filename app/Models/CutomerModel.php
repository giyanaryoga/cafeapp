<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = "customer";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['email', 'name', 'no_hp', 'id_meja'];
}
