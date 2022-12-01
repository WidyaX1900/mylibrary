<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
