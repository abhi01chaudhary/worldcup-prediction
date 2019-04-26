<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
            array(
                'user_role_id'=>1,
                'first_name'=>'Rill',
                'last_name'=>'cup',
                'email'=>'rill_cup@admin.com',
                'password'=>Hash::make('password'),
                'mobile'=>'9849898311',
                'login_type'=>'Normal'
            );
        \App\Models\User::insert($users);
    }
}
