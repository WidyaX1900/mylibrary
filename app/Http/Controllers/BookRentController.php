<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\RentalRequest;

class BookRentController extends Controller
{
    public function index()
    {
        return view('book-rent.index');   
    }

    public function create()
    {
        $visitors = User::where('role_id', '3')->get(['id', 'name']);
        $books = Book::get(['id', 'title']);
        $rent_date = Carbon::now()->toDateString();

        return view('book-rent.create', 
        [
            'visitors' => $visitors, 
            'books' => $books,
            'rent_date' => $rent_date
        ]);   
    }

    public function store(RentalRequest $request)
    {
        
    }
}
