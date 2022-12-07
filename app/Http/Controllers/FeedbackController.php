<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        
        return view('feedback.index', ['feedbacks' => $feedbacks]);   
    }

    public function create()
    {
        return view('feedback.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);
        
        $feedback = Feedback::create([
            'message' => $request->message,
            'user_id' => Auth::user()->id
        ]);

        if($feedback){

            session()->flash('status', 'succcess');
            session()->flash('result', 'Succcessfully');
            session()->flash('action', 'send feedback');
        }

        return redirect('/feedback/create');
    }
}
