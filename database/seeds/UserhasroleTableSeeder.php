<?php

use Illuminate\Database\Seeder;

class UserhasroleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')->table('std_userhasrole')->insert([
            'id' => 1,
            'user_id' => 1,
            'role_id' => 1
        ]);
    }
}
