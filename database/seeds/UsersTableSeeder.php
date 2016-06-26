<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "nora",
            'email' => 'noro9424@gmail.com',
            'password' => bcrypt('сднёмварения321'),
        ]);
    }
}
