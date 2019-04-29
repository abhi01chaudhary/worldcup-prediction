<?php

use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialities =[
            array(
                'title'=>'Captain',
            ),
            array(
                'title'=>'Batsman',
            ),
            array(
                'title'=>'Bowler',
            ),
            array(
                'title'=>'Wicket Keeper',
            ),
            array(
                'title'=>'All Rounder',
            )
        ];
       \App\Models\Speciality::insert($specialities);
    }
}
