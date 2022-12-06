<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorRegisteredController extends Controller
{
    public function create()
    {
        return view('user.visitor-account');
    }
}
