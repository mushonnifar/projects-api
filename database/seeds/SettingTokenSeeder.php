<?php

use Illuminate\Database\Seeder;

class SettingTokenSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        app('db')->table('std_setting_token')->insert([
            'id' => 1,
            'valid_time' => 10
        ]);
    }

}
