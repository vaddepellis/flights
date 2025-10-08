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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('date');
            $table->foreignIdFor(Flights::class);
            $table->string('departure_time');
            $table->string('attival_time');
            $table->string('tax_in_destination');
            $table->string('flight_price');
            $table->enum('status',['booked','cancelled','scratched'])->default('scratched');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
