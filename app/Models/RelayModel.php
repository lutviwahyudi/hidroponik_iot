<?php

namespace App\Models;

use CodeIgniter\Model;

class RelayModel extends Model
{
    protected $table      = 'tb_control';
    protected $primaryKey = 'id';
    protected $allowedFields = ['phdown', 'phup', 'nutrisi'];

}
