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
            $table->id();
            $table->string('name', 191);
            $table->string('studio', 191);
            $table->string('genre');
            $table->string('platform');
            $table->string('image');
            $table->integer('pegi');
            $table->date('date');
            $table->double('price');
            $table->string('desc');
            $table->float('nmoy')->nullable();
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
