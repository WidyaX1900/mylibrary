<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::where('title', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('author', 'LIKE', '%'.$request->keyword.'%')
            ->orderBy('id', 'desc')
            ->get();

        return view('book.index', ['books' => $books]);   
    }

    public function create()
    {
        return view('book.create');   
    }

    public function store(BookRequest $request)
    {
        $fileName = null;
        
        if($request->file('cover')){
            $file = $request->file('cover');
            $file->storeAs('covers', $file->hashName());
            $fileName = $file->hashName();
        }

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'release_date' => $request->release_date,
            'input_date' => Carbon::now(),
            'cover' => $fileName,
            'status' => 1 
        ]);

        if($book){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'Add book');
        }

        return redirect('/book');
    }

    public function show(Book $book)
    {
        return view('book.show', ['book' => $book]);   
    }

    public function edit(Book $book)
    {
        return view('book.edit', ['book' => $book]);   
    }

    public function update(Request $request, Book $book)
    {
        $oldFile = $request->oldFile;

        if($request->file('cover')){

            if($oldFile !== null){

                Storage::disk('public')->delete('covers/'.$oldFile);
            }

            $file = $request->file('cover');
            $file->storeAs('covers', $file->hashName());
            $fileName = $file->hashName();
        
        } else {
            
            $fileName = $oldFile;
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'release_date' => $request->release_date,
            'cover' => $fileName,
            'status' => $request->status 
        ]);

        if($book){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'Update book');
        }

        return redirect('/book'); 
    }

    public function delete(Request $request)
    {
        $book = Book::findOrFail($request->id);
        echo json_encode($book);   
    }

    public function destroy(Request $request)
    {
        $book = Book::findOrFail($request->id);
        
        if($book->cover !== null){

            Storage::disk('public')->delete('covers/'.$book->cover);
        }

        $book->delete();

        if($book){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'Delete book');
        }

        return redirect('/book'); 
    }
}
