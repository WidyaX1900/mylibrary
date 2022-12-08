<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        
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

    public function show($id)
    {
        $feedback = Feedback::with('user')->findOrFail($id);

        return view('feedback.show', ['feedback' => $feedback]);   
    }

    public function personalFeedback()
    {
        $feedbacks = Feedback::where('user_id', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->get(['message', 'created_at']);

        return view('feedback.personal', ['feedbacks' => $feedbacks]);   
    }

    public function delete(Feedback $feedback)
    {
        return view('feedback.delete', ['feedback' => $feedback]);
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        
        if($feedback){

            session()->flash('status', 'success');
            session()->flash('result', 'Successfully');
            session()->flash('action', 'delete feedback');
        }

        return redirect('/feedback');
    }
}
