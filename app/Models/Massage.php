<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Contact Model
 * 
 * Model untuk menangani data pesan kontak dari form contact
 */
class Massage extends Model
{
    use HasFactory;

    /**
     * Field yang bisa diisi mass assignment
     */
    protected $guarded = [
        'id',
    ];
}
