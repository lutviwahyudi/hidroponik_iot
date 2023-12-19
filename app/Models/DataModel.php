<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table      = 'sensor';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ph', 'tds', 'up', 'down', 'pompanutrisi','created_at', 'updated_at'];

    //memperbarui data secara realtime
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getSensor()
    {
        return $this->findAll();
    }

    public function getTable1()
    {
        return $this->db->table($this->table)
            ->select('ph, tds, up, down, pompanutrisi, updated_at')
            ->get()
            ->getResultArray();
    }

}
