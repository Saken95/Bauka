<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@bases.kz',
                'password' => 'secret',
                'role_id'   => 1
            ],
            [
                'name' => 'user',
                'email' => 'user@bases.kz',
                'password' => 'secret',
                'role_id'   => 2
            ],
        ];
        
        foreach ( $users as $user ) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'role_id' => $user['role_id'],
            ]);
        }

    }
}
