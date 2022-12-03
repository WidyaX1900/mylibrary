<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $available = Book::where('status', 1)->get();
        $borrowed = Book::where('status', 0)->get();
        
        $booksCount = count($books);
        $availableCount = count($available);
        $borrowedCount = count($borrowed);

        return view('home', [
            'books' => $booksCount,
            'available' => $availableCount,
            'borrowed' => $borrowedCount
        ]);
    }
}
