<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRentController extends Controller
{
    public function index()
    {
        return view('book-rent.index');   
    }
}