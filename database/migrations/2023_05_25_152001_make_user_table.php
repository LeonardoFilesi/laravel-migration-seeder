<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('train_code');
            $table->string('wagons_n');
            $table->string('on_time');
            $table->string('cancelled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
