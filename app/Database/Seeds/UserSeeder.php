<?php

namespace App\Database\Seeds;

use App\Models\User;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{

    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function run()
    {

        $username = 'admin123';
        $password = password_hash('admin123', PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'password' => $password,
        ];

        $this->user->insert($data);
    }
}
