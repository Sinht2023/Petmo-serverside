<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceHolidaysTable extends Migration
{
    public function up()
    {
        Schema::create('place_holidays', function (Blueprint $table) {
            $table->id('holiday_id'); // Primary key
            $table->string('place_id')->nullable(false);
            $table->date('holiday_date');
            $table->timestamps();

            // Define foreign key constraint
            //$table->foreign('place_id')->references('id')->on('pet_azuke_places')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('place_holidays');
    }
}
