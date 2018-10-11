<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Roles::class, 'admin')->create();
        factory(\App\Roles::class, 'client')->create();
    }
}
