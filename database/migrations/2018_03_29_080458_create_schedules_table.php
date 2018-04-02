<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airline_ident');
            $table->string('airline_name');
            $table->string('callsign');
            $table->string('dep_airport');
            $table->string('arr_airport');
            $table->time('dep_time');
            $table->time('arr_time');
            $table->string('dep_city');
            $table->string('arr_city');
            $table->string('aircraft');
            $table->text('pref_route');

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
        Schema::dropIfExists('schedules');
    }
}
