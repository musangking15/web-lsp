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

        if (empty($user['username']) || empty($user['password'])) {
            session()->setFlashdata('jenis', 'error');
            session()->setFlashdata('pesan1', 'Gagal Login!');
            session()->setFlashdata('pesan2', 'Username dan Password tidak boleh kosong');
            return redirect()->to('/');
        }

        $admin = $this->users->where('username', $user['username'])->first();

        if ($admin) {
            if (password_verify($user['password'], $admin['password'])) {
                $params['id'] = $admin['user_id'];
                session()->set($params);
                return redirect()->route('beranda');
            } else {
                session()->setFlashdata('jenis', 'error');
                session()->setFlashdata('pesan1', 'Gagal Login!');
                session()->setFlashdata('pesan2', 'Password salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('jenis', 'error');
            session()->setFlashdata('pesan1', 'Gagal Login!');
            session()->setFlashdata('pesan2', 'Username salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
