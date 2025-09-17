<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * About Model
 * 
 * Model untuk menangani data tentang perusahaan
 */
class About extends Model
{
    use HasFactory;

    /**
     * Field yang bisa diisi mass assignment
     */
    protected $guarded = [
        'id',
    ];
}