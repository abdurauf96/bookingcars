<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoublebusPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doublebus_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('children');
            $table->string('youngs');
            $table->string('pensioners');
            $table->string('invalids');
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
        Schema::dropIfExists('doublebus_prices');
    }
}
