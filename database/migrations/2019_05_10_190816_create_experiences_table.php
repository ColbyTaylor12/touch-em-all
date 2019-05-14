<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('profile_id')->unsigned();
            $table->bigInteger('stadium_visited')->unsigned();
            $table->text('day_visited');
            $table->decimal('ticket', 8, 2)->nullable();
            $table->decimal('beer', 8, 2)->nullable();
            $table->decimal('soda', 8, 2)->nullable();
            $table->decimal('hot_dog', 8, 2)->nullable();
            // $table->boolean('isDeleted')->default(0);
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('user_profiles');
            $table->foreign('stadium_visited')->references('id')->on('stadiums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
