<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_first_id')->unsigned();
            $table->foreign('team_first_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
            $table->integer('team_second_id')->unsigned();
            $table->foreign('team_second_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
            $table->string('stage');
            // $table->integer('group_id')->unsigned();
            // $table->foreign('group_id')
            //     ->references('id')
            //     ->on('groups')
            //     ->onDelete('cascade');
            // $table->integer('round_id')->unsigned();
            // $table->foreign('round_id')
            //     ->references('id')
            //     ->on('rounds')
            //     ->onDelete('cascade');
            $table->integer('stadium_id')->unsigned();
            $table->foreign('stadium_id')
                ->references('id')
                ->on('stadia')
                ->onDelete('cascade');
            $table->dateTime('fixture_time');
            $table->string('winner')->nullable();
            $table->integer('team_first_runs_made')->nullable();
            $table->integer('team_second_runs_made')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixtures');
    }
}
