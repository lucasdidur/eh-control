<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "Lucas",
            'last_name' => "Didur",
            'email' => 'lucasdidur@hotmail.com',
            'password' => bcrypt('123456'),
            'username_minecraft' => 'lucasdidur',
            'phone' => '42 9960-3090',
        ]);
    }
}