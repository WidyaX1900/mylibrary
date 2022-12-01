<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\RentalRequest;
use App\Models\Book_Rent;

class BookRentController extends Controller
{
    public function index()
    {
        return view('book-rent.index');   
    }

    public function create()
    {
        $visitors = User::where('role_id', '3')->get(['id', 'name']);
        $books = Book::where('status', 1)->get(['id', 'title']);
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
        $book = Book::findOrFail($request->book_id);
        
        $rental = Book_Rent::create([
            'book_id' => $request->book_id,
            'user_id' => $request->user_id,
            'rent_date' => $request->rent_date,
            'return_date' => $request->return_date
        ]);

        $book->update([
            'status' => 0
        ]);

        if($rental){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'Add rental data');
        }

        return redirect('/rental');
    }
}
