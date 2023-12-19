<?php

namespace App\Controllers;

use \App\Models\DataModel;
use \App\Models\SensorModel;

class Pages extends BaseController
{
    protected $DataModel;
    protected $SensorModel;
    public function __construct()
    {
        $this->DataModel = new DataModel;
        $this->SensorModel = new SensorModel;
    }
    public function index()
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'data' => $this->DataModel->getSensor(),
        ];
        return view('pages/index', $data);
    }

    public function phSensor()
    {
        $data = [
            'sensor' => $this->DataModel->getSensor()
        ];

        return view('data/ph', $data);
    }
    public function tds()
    {
        $data = [
            'sensor' => $this->DataModel->getSensor()
        ];

        return view('data/tds', $data);
    }

    public function up()
    {
        $data = [
            'sensor' => $this->DataModel->getSensor()
        ];

        return view('pompa/up', $data);
    }

    public function down()
    {
        $data = [
            'sensor' => $this->DataModel->getSensor()
        ];

        return view('pompa/down', $data);
    }


    public function nutrisi()
    {
        $data = [
            'sensor' => $this->DataModel->getSensor()
        ];

        return view('pompa/nutrisi', $data);
    }

    public function urlData()
    {

        $ph = $this->request->uri->getSegment(3);
        $tds = $this->request->uri->getSegment(4);
        $up = $this->request->uri->getSegment(5);
        $down = $this->request->uri->getSegment(6);
        $pompanutrisi = $this->request->uri->getSegment(7);

        $data = array(
            'ph' => $ph,
            'tds' => $tds,
            'up' => $up,
            'down' => $down,
            'pompanutrisi' => $pompanutrisi
        );

        $this->DataModel->Update(1, $data);
    }

    public function tabel()
    {
        $data = [
            'title' => 'tabel data',
            'sensor' => $this->SensorModel->getSensor()
        ];
        return view('pages/tb_data', $data);
    }
}
