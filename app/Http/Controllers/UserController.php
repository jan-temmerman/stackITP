<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Models\Question;
use Auth;

class UserController extends Controller
{
    public function profile() {
        if(Auth::user()) {
            $questions = Question::where('user_id', Auth::user()->id)->get();
            return View::make('profile')->with(compact("questions"));
        } else {
            return redirect('/login');
        }
    }

    public function delete() {
        if(Auth::user()) {
            $user_id = Auth::id();

            Auth::logout();

            if (User::find($user_id)->delete()) {
                return Redirect::route('questions.home');
            }
        } else {
            return redirect('/login');
        }
    }
}
