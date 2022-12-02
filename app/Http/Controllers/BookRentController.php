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
    public function index(Request $request)
    {
        $rental = Book_Rent::with(['book', 'user'])->get();
    
        return view('book-rent.index', ['rental' => $rental]);   
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

    public function edit($id)
    {   
        $rental = Book_Rent::with(['user', 'book'])
            ->findOrFail($id);

        $book = Book::where('status', 1)
            ->get(['id', 'title']);

        return view('book-rent.edit', ['rental' => $rental, 'book' => $book]);   
    }

    public function update(Request $request, $id)
    {
        $rental = Book_Rent::with(['user', 'book'])
            ->findOrFail($id);

        $newBook = Book::findOrFail($request->book_id);
        $borrowedBook = Book::findOrFail($rental->book->id);

        $rental->update([
            'book_id' => $request->book_id,
            'rent_date' => $request->rent_date,
            'return_date' => $request->return_date
        ]);
        
        // Check if user choose a new book
        if($newBook->id !== $borrowedBook->id){

            $newBook->update([
                'status' => 0
            ]);

            $borrowedBook->update([
                'status' => 1
            ]);
        }

        if($rental){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'Update rental data');
        }

        return redirect('/rental');
    }

    public function delete(Request $request)
    {
        $rental = Book_Rent::findOrFail($request->id);
        echo json_encode($rental);   
    }

    public function destroy(Request $request)
    {
        $rental = Book_Rent::findOrFail($request->id);
        $book = Book::findOrFail($rental->book_id);
        
        $book->update([
            'status' => 1
        ]);

        $rental->delete();

        if($rental){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'Delete rental data');
        }

        return redirect('/rental');
    }
}
