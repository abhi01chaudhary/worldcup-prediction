<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('flag_image');
            // $table->integer('total_goals_count')->nullable();
            $table->string('total_matches_played')->nullable();
            $table->integer('total_runs_made')->nullable();
            // $table->integer('group_id')->unsigned();
            // $table->foreign('group_id')
            //     ->references('id')
            //     ->on('groups')
            //     ->onDelete('cascade');
            $table->integer('round_id')->unsigned();
            $table->foreign('round_id')
                ->references('id')
                ->on('rounds')
                ->onDelete('cascade');
            $table->integer('icc_world_ranking')->nullable();
            $table->string('winning_history')->nullable();
            $table->integer('winning_count')->default(0);
            $table->integer('losing_count')->default(0);
            $table->integer('total_points')->default(0);
            $table->integer('match_count')->default(0);
            $table->text('country_news')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
