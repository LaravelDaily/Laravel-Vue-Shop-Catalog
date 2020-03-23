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
                'password'       => '$2y$10$yRfHIFyppaYVn10cTZ8GnOHdeY7AT.w7E5H6O4tY2xhLO8DDHII1e',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
