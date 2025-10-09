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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number')->unique();
            $table->string('airline_code')->nullable();
            $table->string('business_class_indicator')->nullable();
            $table->string('smothing-allowed')->nullable();
            $table->string('flight_availality')->nullable();
            $table->string('date_time_departure')->nullable();
      
            $table->string('tot_available_seat_bs_cl')->nullable();//business class
            $table->string('tot_available_seat_ec_cl')->nullable();//economic class
            $table->string('booked_seat_ec_cl')->nullable();//economic class

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
