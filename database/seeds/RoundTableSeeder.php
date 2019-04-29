<?php

use Illuminate\Database\Seeder;

class RoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rounds = [
            array(
                'id'=>1,
                'round_name'=>'Group stage',
                'slug'=>'group-stage',
            ),
            // array(
            //     'id'=>2,
            //     'round_name'=>'Round of 16',
            //     'slug'=>'round-of-16',
            // ),
            array(
                'id'=>3,
                'round_name'=>'Quarter finals',
                'slug'=>'quarter-finals',
            ),
            array(
                'id'=>4,
                'round_name'=>'Semi finals',
                'slug'=>'semi-finals',
            ),
             array(
                'id'=>5,
                'round_name'=>'Finals',
                'slug'=>'finals',
            ),
            array(
                'id'=>6,
                'round_name'=>'Winner',
                'slug'=>'winner',
            )
        ];

        \App\Models\Round::insert($rounds);
    }
}
