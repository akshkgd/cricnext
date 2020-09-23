<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role')->nullable();
            $table->string('image')->nullable();
            $table->integer('age')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('team_id')->nullable();
            $table->integer('is_captian')->default(0)->nullable();
            $table->integer('matches')->default(0)->nullable();
            $table->integer('innings')->default(0)->nullable();
            $table->integer('runs')->default(0)->nullable();
            $table->integer('highest')->default(0)->nullable();
            $table->integer('batting_avg')->default(0)->nullable();
            $table->integer('sr')->default(0)->nullable();
            $table->integer('hundred')->default(0)->nullable();
            $table->integer('fifty')->default(0)->nullable();
            $table->integer('wickets')->default(0)->nullable();
            $table->integer('balls')->default(0)->nullable();
            $table->integer('bowling_avg')->default(0)->nullable();
            $table->integer('economy')->default(0)->nullable();
            $table->integer('w5')->default(0)->nullable();
            $table->integer('w10')->default(0)->nullable();
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
        Schema::dropIfExists('players');
    }
}
