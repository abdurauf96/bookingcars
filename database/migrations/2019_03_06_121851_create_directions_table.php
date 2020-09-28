<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service')->nullable();
            $table->string('car')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('date_in')->nullable();
            $table->string('date_out')->nullable();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->string('chair_children')->nullable();
            $table->string('summa')->nullable();
            $table->string('name')->nullable();
            $table->string('sonname')->nullable();
            $table->string('age')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('region')->nullable();
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
        Schema::dropIfExists('directions');
    }
}
