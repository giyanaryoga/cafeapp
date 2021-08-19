<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $useTimestamps = true;
    // protected $returnType = "object";
    protected $allowedFields = ['username', 'password', 'email', 'name', 'id_role'];

    public function getUser($username = false)
    {
        if ($username == false) {
            return $this->paginate(3, 'user');
        }
        //join dgn role
        return $this->join('role', 'role.id = user.id_role')->where(['username' => $username])->first();
    }
}
