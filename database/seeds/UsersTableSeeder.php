<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        app('db')->table('users')->insert([
            'id' => 1,
            'name' => 'administrator',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@mail.com',
        ]);
    }

}
