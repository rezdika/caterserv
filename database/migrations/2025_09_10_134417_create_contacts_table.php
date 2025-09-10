<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk tabel contacts
 * 
 * Tabel ini menyimpan data pesan kontak dari form contact
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pengirim
            $table->string('email'); // Email pengirim
            $table->string('subject'); // Subject pesan
            $table->text('message'); // Isi pesan
            $table->enum('status', ['unread', 'read', 'replied'])->default('unread'); // Status pesan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
