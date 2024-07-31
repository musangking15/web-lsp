<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function login()
    {
        $user = $this->request->getVar();

        if (!$user) {
            return redirect()->to('/');
        }

        $admin = $this->users->where('username', $user['username'])->first();

        if ($admin) {
            if (password_verify($user['password'], $admin['password'])) {
                $params['id'] = $admin['user_id'];
                session()->set($params);
                return redirect()->route('beranda');
            } else {
                return redirect()->to('/');
            }
        } else {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
