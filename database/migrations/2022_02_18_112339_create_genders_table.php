<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lang_id');
            $table->string('name');
            $table->string('gender');
            $table->foreign('lang_id')
                ->references('id')
                ->on('languages_data')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genders');
    }
}
