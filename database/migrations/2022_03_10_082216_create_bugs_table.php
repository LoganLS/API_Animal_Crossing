<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('url');
            $table->string('icon_url');
            $table->string('image_url');
            $table->text('catchphrase');
            $table->text('catchphrase2');
            $table->string('location');
            $table->string('rarity');
            $table->integer('total_catch');
            $table->integer('sell_nook');
            $table->integer('sell_flick');
            $table->integer('tank_width');
            $table->integer('tank_length');
            $table->string('time');
            $table->string('n_availability');
            $table->string('s_availability');
            $table->foreignId('lang_id')->constrained('languages_data');
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
        Schema::dropIfExists('bugs');
    }
}
