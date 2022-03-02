<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\User;
use Input;
use function PHPUnit\Framework\isEmpty;

class FeedbackController extends Controller
{
    public function index() {
        $users = User::all();

        $users = $users->filter(function ($user, $key) {
            return $user->feedback->count() > 0;
        });
//        return $users;
        return view('admin.feedback.feedback')->with('users', $users);
    }

    public function store(Request $request) {
        $feedback = new Feedback;
        $feedback->user_id = $request->user()->id;
        $feedback->feedback = $request->feedback;

//        return $feedback;

        $feedback->save();

        toastr()->success("Your feedback send successfully!");
        return redirect('/vertex/feedback');
    }

    public function create() {
        return view('users.feedback');
    }

}
