<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pet_azuke_places', function (Blueprint $table) {
            $table->primary('id');
            $table->uuid('id')->comment('ID');
            $table->string('user_id')->nullable(false);
            $table->string('place_name')->nullable(false);
            $table->string('price')->nullable(false);
            $table->string('postal_code')->nullable(false);
            $table->string('address1')->nullable(false);
            $table->string('address2')->nullable(false);
            $table->string('address3')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('cat_allow')->nullable(false);
            $table->string('dog_allow')->nullable(false);
            $table->string('pet_food_service')->nullable(false);
            $table->string('pets_allowed_number')->nullable(false);
            $table->string('check_in_time')->nullable(false);
            $table->string('check_out_time')->nullable(false);
            $table->string('other_details')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_azuke_places');
    }
};
