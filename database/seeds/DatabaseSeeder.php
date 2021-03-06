<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SpecialitySeeder::class);
        $this->call(RoundTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(NationsSeeder::class);
    }
}
