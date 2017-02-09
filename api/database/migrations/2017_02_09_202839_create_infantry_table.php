<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfantryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infantry', function (Blueprint $table) {

            $table->integer('mission');
            $table->string('player_id', 60);
            $table->string('unit', 60);
            $table->string('name', 60);
            $table->tinyInteger('faction');
            $table->string('group', 50);
            $table->tinyInteger('leader');
            $table->string('icon', 60);
            $table->string('data', 200);
            $table->integer('mission_time');

            $table->index('mission');
            $table->index('unit');
            $table->index('player_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infantry');
    }
}
