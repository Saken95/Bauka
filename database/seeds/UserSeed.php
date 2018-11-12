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
                'password' => 'secret'
            ]
        ];
        
        foreach ( $users as $user ) {
            foreach ($user as $value ) {
                User::create([
                    'name' => $value['name'],
                    'email' => $value['email'],
                    'password' => Hash::make($value['password']),
                ]);
            }
        }

    }
}
