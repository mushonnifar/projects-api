<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        app('db')->table('menus')->insert([
                [
                'id' => 1,
                'parent' => 0,
                'name' => 'Master Data',
                'description' => 'Master Data',
                'link' => '',
                'icon' => 'fa fa-folder',
                'order' => 4
            ],
                [
                'id' => 2,
                'parent' => 0,
                'name' => 'User Management',
                'description' => 'Management User',
                'link' => 'routeMasterUser',
                'icon' => 'fa fa-user-o',
                'order' => 3
            ],
                [
                'id' => 3,
                'parent' => 1,
                'name' => 'Master Menu',
                'description' => 'Management Menu',
                'link' => 'routeMasterMenu',
                'icon' => 'fa fa-circle-o',
                'order' => 2
            ],
                [
                'id' => 4,
                'parent' => 1,
                'name' => 'Master Role',
                'description' => 'Management Role',
                'link' => 'routeMasterRole',
                'icon' => 'fa fa-circle-o',
                'order' => 3
            ],
                [
                'id' => 5,
                'parent' => 1,
                'name' => 'Master Route',
                'description' => 'Management Route',
                'link' => 'routeMasterRoutes',
                'icon' => 'fa fa-circle-o',
                'order' => 4
            ],
                [
                'id' => 6,
                'parent' => 0,
                'name' => 'Privilege',
                'description' => 'Management Privilege',
                'link' => '',
                'icon' => 'fa fa-lock',
                'order' => 4
            ],
                [
                'id' => 7,
                'parent' => 6,
                'name' => 'Privilege Menu',
                'description' => 'Privilege Menu',
                'link' => 'routePrivilegeMenu',
                'icon' => 'fa fa-circle-o',
                'order' => 2
            ],
                [
                'id' => 8,
                'parent' => 6,
                'name' => 'Privilege Route',
                'description' => 'Privilege Route',
                'link' => 'routePrivilegeRoute',
                'icon' => 'fa fa-circle-o',
                'order' => 3
            ],
        ]);
    }

}
