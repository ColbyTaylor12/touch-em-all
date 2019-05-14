<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiumProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stadium_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('stadium')->unsigned();
            $table->binary('image');
            $table->text('current_year');
            $table->decimal('ticket', 8, 2);
            $table->decimal('beer', 8, 2);
            $table->decimal('soda', 8, 2);
            $table->decimal('hot_dog', 8, 2);
        });

        Schema::table('stadium_profiles', function (Blueprint $table) {
            $table->foreign('stadium')->references('id')->on('stadiums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stadium_profiles');
    }
}
