<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk tabel bookings
 * 
 * Tabel ini menyimpan data pemesanan catering dari form booking
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('country'); // Negara
            $table->string('city'); // Kota
            $table->string('venue'); // Tempat acara
            $table->enum('event_type', ['small_event', 'big_event']); // Jenis event
            $table->enum('number_of_guests', ['100-200', '300-400', '500-600', '700-800', '900-1000', '1000+']); // Jumlah tamu
            $table->enum('food_preference', ['vegetarian', 'non_vegetarian']); // Preferensi makanan
            $table->string('contact_number'); // Nomor kontak
            $table->date('event_date'); // Tanggal acara
            $table->string('email'); // Email
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->default('pending'); // Status booking
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
