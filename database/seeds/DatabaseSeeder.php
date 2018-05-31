<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call([
            UsersTableSeeder::class,
            ActionsTableSeeder::class,
            RoutesTableSeeder::class,
            MenusTableSeeder::class,
            RolesTableSeeder::class,
            RolehasrouteTableSeeder::class,
            RoleroutehasactionTableSeeder::class,
            RolehasmenuTableSeeder::class,
            RolemenuhasactionTableSeeder::class,
            UserhasroleTableSeeder::class,
            SettingTokenSeeder::class
        ]);
    }

}
