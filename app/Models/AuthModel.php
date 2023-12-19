<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password'];

}
