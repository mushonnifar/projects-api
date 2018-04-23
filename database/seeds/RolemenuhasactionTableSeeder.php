<?php

use Illuminate\Database\Seeder;

class RolemenuhasactionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        app('db')->table('rolemenuhasaction')->insert([
                [
                'rolemenu_id' => 1,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 1,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 1,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 1,
                'action_id' => 4
            ],
                [
                'roleroute_id' => 2,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 2,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 2,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 2,
                'action_id' => 4
            ],
                [
                'rolemenu_id' => 3,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 3,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 3,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 3,
                'action_id' => 4
            ],
                [
                'rolemenu_id' => 4,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 4,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 4,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 4,
                'action_id' => 4
            ],
                [
                'rolemenu_id' => 5,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 5,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 5,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 5,
                'action_id' => 4
            ],
                [
                'rolemenu_id' => 6,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 6,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 6,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 6,
                'action_id' => 4
            ],
                [
                'rolemenu_id' => 7,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 7,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 7,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 7,
                'action_id' => 4
            ],
                [
                'rolemenu_id' => 8,
                'action_id' => 1
            ],
                [
                'rolemenu_id' => 8,
                'action_id' => 2
            ],
                [
                'rolemenu_id' => 8,
                'action_id' => 3
            ],
                [
                'rolemenu_id' => 8,
                'action_id' => 4
            ],
        ]);
    }

}
