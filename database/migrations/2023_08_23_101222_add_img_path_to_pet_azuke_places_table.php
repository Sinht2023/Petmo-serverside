<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgPathToPetAzukePlacesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add the img_path column to the pet_azuke_places table
        Schema::table('pet_azuke_places', function (Blueprint $table) {
            $table->string('img_path')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the img_path column from the pet_azuke_places table
        Schema::table('pet_azuke_places', function (Blueprint $table) {
            $table->dropColumn('img_path');
        });
    }
}
