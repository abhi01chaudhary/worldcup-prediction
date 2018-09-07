<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoles =[
            array(
                'role_type'=>'admin',
            ),
            array(
                'role_type'=>'customer',
            )
        ];
       \App\Models\UserRole::insert($userRoles);
    }
}
