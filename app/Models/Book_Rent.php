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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
