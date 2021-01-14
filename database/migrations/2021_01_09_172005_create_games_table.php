<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('studio', 191);
            $table->text('genre');
            $table->text('platform');
            $table->integer('pegi');
            $table->integer('date');
            $table->double('price');
            $table->double('pht');
            $table->double('phm');
            $table->text('desc');
            $table->float('nmoy');
            $table->timestamps();
        });
    }
    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
