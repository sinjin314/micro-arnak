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
            $table->text('type');
            $table->text('platform');
            $table->integer('pegi');
            $table->date('date_publication');
            $table->double('price');
            // $table->double('price_exlud');
            // $table->double('phm');
            $table->text('description');
            $table->float('note')->nullable();
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
