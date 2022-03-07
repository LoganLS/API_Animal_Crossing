<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys1ToVillagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('villagers', function (Blueprint $table) {
            $table->unsignedBigInteger('gender_id')->after('clothing')->nullable();;
            $table->unsignedBigInteger('lang_id')->after('gender_id')->nullable();;
            $table->unsignedBigInteger('sign_id')->after('lang_id')->nullable();;
            $table->unsignedBigInteger('species_id')->after('sign_id')->nullable();;
            $table->unsignedBigInteger('personality_id')->after('species_id')->nullable();;
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('lang_id')
                ->references('id')
                ->on('languages_data')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('sign_id')
                ->references('id')
                ->on('signs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('species_id')
                ->references('id')
                ->on('species')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('personality_id')
                ->references('id')
                ->on('personalities')
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
        Schema::table('villagers', function (Blueprint $table) {
            $table->dropConstrainedForeignId('gender_id');
            $table->dropConstrainedForeignId('lang_id');
            $table->dropConstrainedForeignId('sign_id');
            $table->dropConstrainedForeignId('species_id');
            $table->dropConstrainedForeignId('personality_id');
        });
    }
}
