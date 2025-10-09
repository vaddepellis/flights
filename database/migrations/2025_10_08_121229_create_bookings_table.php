<?php

use App\Models\Flights;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('tax_in_origin')->nullable();
            $table->string('tax_in_destination')->nullable();
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
            $table->foreignIdFor(Currency::class)->constrained()->onDelete('cascade');
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
