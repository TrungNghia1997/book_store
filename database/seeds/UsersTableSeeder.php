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
            'name' => "admin",
            'email' => 'demo@gmail.com',
            'password' => bcrypt('123456'),
            'phone_number'=>'0965683898',
            'role'=>'1',
        ]);
    }
}
