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
            'name' => 'Adam Carter',
            'email' => 'adam@jakatasalon.co.uk',
            'password' => Hash::make('blonde123'),
            'remember_token' => null,
        ]);
    }
}