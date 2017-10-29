<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pakiranje');
            $table->string('naziv');
            $table->text('barva');
            $table->text('aroma');
            $table->text('okus');
            $table->text('kristalizacija');
            $table->text('castocenja');
            $table->longText('uporaba');
            $table->text('posebnosti');
            $table->float('cena', 10,2);
            $table->integer('photo_id')->unsigned()->index();
            $table->string('status');


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
        Schema::dropIfExists('items');
    }
}
