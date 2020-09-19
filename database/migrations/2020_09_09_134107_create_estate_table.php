<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate', function (Blueprint $table) {
            $table->id();
            $table->string('estate_name');
            $table->integer('city_id');
            $table->integer('estate_type_id');
            $table->decimal('floor_space', 8, 2);
            $table->integer('number_of_balconies');
            $table->integer('number_of_living_rooms');
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_bathrooms');
            $table->integer('number_of_garages');
            $table->integer('number_of_parking_spaces');
            $table->string('estate_description');
            $table->string('estate_status_id');
            $table->string('estate_price');
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
        Schema::dropIfExists('estate');
    }
}
