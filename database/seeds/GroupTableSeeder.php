<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups =[
            array(
                'id'=>1,
                'group_name'=>'Group A',
                'slug'=>'group-a',
            ),
            array(
                'id'=>2,
                'group_name'=>'Group B',
                'slug'=>'group-b',
            )
            // ,
            // array(
            //     'id'=>3,
            //     'group_name'=>'Group C',
            //     'slug'=>'group-c',
            // ),
            // array(
            //     'id'=>4,
            //     'group_name'=>'Group D',
            //     'slug'=>'group-d',
            // ),
            // array(
            //     'id'=>5,
            //     'group_name'=>'Group E',
            //     'slug'=>'group-E',
            // ),
            // array(
            //     'id'=>6,
            //     'group_name'=>'Group F',
            //     'slug'=>'group-f',
            // ),
            // array(
            //     'id'=>7,
            //     'group_name'=>'Group G',
            //     'slug'=>'group-g',
            // ),
            // array(
            //     'id'=>8,
            //     'group_name'=>'Group H',
            //     'slug'=>'group-h',
            // )
        ];
       \App\Models\Group::insert($groups);
    }
}
