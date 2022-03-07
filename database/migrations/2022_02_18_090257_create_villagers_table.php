<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('image_url')->nullable();
            $table->string('icon_url')->nullable();
            $table->string('birthday_month')->nullable();
            $table->integer('birthday_day')->nullable();
            $table->text('phrase')->nullable();
            $table->string('catchphrase')->nullable();
            $table->string('clothing')->nullable();
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
        Schema::dropIfExists('villagers');
    }
}
