<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Rent extends Model
{
    use HasFactory;

    protected $table = 'book_rent';
    
    protected $fillable = [
        'book_id',
        'user_id',
        'rent_date',
        'return_date'
    ];
}
