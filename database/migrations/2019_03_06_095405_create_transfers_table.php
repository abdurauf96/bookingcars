<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service')->nullable();
            $table->string('car')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('quantity_people')->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
