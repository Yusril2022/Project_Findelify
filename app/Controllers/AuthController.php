<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function create()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $model->save($data);
        return redirect()->to('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function loginProcess()
{
    $model = new UserModel();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    // Periksa apakah username ada di database
    $user = $model->getUser($username);
    if (!$user) {
        // Jika username tidak ditemukan
        session()->setFlashdata('pesan', 'Username salah!');
        return redirect()->to('/login');
    }

    // Periksa password
    if (!password_verify($password, $user['password'])) {
        // Jika password salah
        session()->setFlashdata('pesan', 'Password salah!');
        return redirect()->to('/login');
    }

    // Jika username dan password benar, set session dan redirect ke dashboard
    session()->set([
        'user_id' => $user['id'],
        'username' => $user['username'],
        'is_logged_in' => true
    ]);
    return redirect()->to('/dashboard')->with('pesan', 'Berhasil login!');
}

    

    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
