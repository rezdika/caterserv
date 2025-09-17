<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Booking Model
 * 
 * Model untuk menangani data booking/pemesanan catering
 * Sesuai dengan form booking di halaman book
 */
class Booking extends Model
{
    use HasFactory;

    /**
     * Field yang bisa diisi mass assignment
     */
    protected $guarded = [
        'id',
    ];

}
