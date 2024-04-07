<?php

namespace App\Controllers;

use \App\Models\DataModel;
use \App\Models\SensorModel;
use \App\Models\RelayModel;

class Pages extends BaseController
{
    protected $DataModel;
    protected $RelayModel;
    protected $SensorModel;
    public function __construct()
    {
        $this->DataModel = new DataModel;
        $this->RelayModel = new RelayModel;
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

    public function kontrol()
    {
        $data = [
            'title' => 'Kontrol Pompa',
            
        ];
        return view('pages/kontrol', $data);
    }

    public function relayDown() 
    {
        $stat = $this->request->getVar('stat');

        if ($stat == "ON") {
            // Ubah field relay menjadi 1
            $this->RelayModel->update(1, ['phdown' => 1]);
            // Berikan respon
            echo "ON";
        } else {
            // Ubah field relay menjadi 0
            $this->RelayModel->update(1, ['phdown' => 0]);
            // Berikan respon
            echo "OFF";
        }
    }

    public function relayUp()
    {
        $stat = $this->request->getVar('stat');

        if ($stat == "ON") {
            $this->RelayModel->update(1, ['phup' => 1]);

            echo "ON";

        }else {
            $this->RelayModel->update(1, ['phup' => 0]);

            echo "OFF";
        }
    }
}
