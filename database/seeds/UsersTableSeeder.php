<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$LRWA1uv34yFwp6h4joRhzOpyxTGmbGNDr4QFlV3MZRJDnbOoIAtHa',
            'remember_token' => null,
            'created_at'     => '2019-07-12 03:29:36',
            'updated_at'     => '2019-07-12 03:29:36',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
