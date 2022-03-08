<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('name');
            $table->string('image_url')->nullable();
            $table->string('music_url')->nullable();
            $table->double('buy_price')->nullable();
            $table->double('sell_price')->nullable();
            $table->unsignedBigInteger('lang_id')->nullable();
            $table->timestamps();

            $table->foreign('lang_id')
                ->references('id')
                ->on('languages_data')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}
