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
        $user = $model->getUser($this->request->getPost('username'));
        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set('user_id', $user['id']);
            return redirect()->to('/posts');
        }
        return redirect()->to('/login')->with('error', 'Invalid username or password');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
