<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $AuthModel;

    public function __construct()
    {
        $this->AuthModel = new AuthModel();   
    }

    public function index()
    {
        return view('auth/login');
    }
    
    public function getData()
    {
        //ambil data dari form 
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        //lakukan pengecekan autentikasi
        // $AuthModel = new \App\Models\AuthModel();
        $user = $this->AuthModel->where('email', $email)->first();
        //validasi password
        if ($user && password_verify($password, $user['password'])) {

            session()->set('user_id', $user['id']);
            session()->set('user', $user);
            return redirect()->to('pages');
        } else {

            return redirect()->to('auth/login')->withInput()->with('error', 'uername atau password salah');
        }

    }

    public function logout()
    {
        //jangan simpan data chace
        $response = service('response');
        $response->noCache();
        //hapus semua data sesi kita
        session()->destroy();

        return redirect()->to('auth');    
    }

}
