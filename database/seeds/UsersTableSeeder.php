<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$jjadUk8v3HZQRmCT.CsUde0wmqfBmUJit8I1B0byftyZnzJspUrsu',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
