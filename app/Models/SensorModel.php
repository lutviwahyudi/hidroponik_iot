<?php

namespace App\Models;

use CodeIgniter\Model;

class SensorModel extends Model
{
    protected $table      = 'penugasan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ph', 'tds', 'up', 'down', 'pompanutrisi', 'created_at', 'updated_at'];

    //memperbarui data secara realtime
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getSensor()
    {
        return $this->findAll();
    }

    public function getTable2($data)
    {
        return $this->db->table($this->table)
            ->insert($data);
    }
    
}
