<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoubleBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('double_buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service')->nullable();
            $table->string('car')->nullable();
            $table->string('marshrut')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('childs')->nullable();
            $table->string('youngs')->nullable();
            $table->string('pensioners')->nullable();
            $table->string('invalids')->nullable();
            $table->string('all_peoples')->nullable();
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
        Schema::dropIfExists('double_buses');
    }
}
