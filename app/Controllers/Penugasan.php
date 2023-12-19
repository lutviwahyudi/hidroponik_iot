<?php

namespace App\Controllers;

use App\Models\SensorModel;
use App\Models\DataModel;

class Penugasan extends BaseController
{
    protected $DataModel;
    protected $SensorModel;
    public function __construct()
    {
        $this->SensorModel = new SensorModel();
        $this->DataModel = new DataModel();
    }

    public function index()
    {

        // Ambil data dari Tabel 1
        $dataFromTable1 = $this->DataModel->getTable1();

        // Simpan data ke Tabel 2
        foreach ($dataFromTable1 as $sen) {
            $this->SensorModel->getTable2($sen);
        }

        $data = [
            'title' => 'Halaman | Tabel',
            'data' => $this->SensorModel->getSensor()
        ];

        return view('pages/index', $data);
    }
}
