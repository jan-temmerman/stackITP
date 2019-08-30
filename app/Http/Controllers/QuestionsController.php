<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

use App\Models\Question;
use App\Models\Answer;
use App\User;
use Auth;

class QuestionsController extends Controller
{
    public function home() {
        $questions = Question::all();
        return View::make('home')->with(compact("questions"));
    }

    public function saveQuestion() {
        if(Auth::user()) {
            \request()->validate([
                "question" => "required",
            ]);

            $content = request("question");

            $data = [
                    "content" => $content,
                    "user_id" => Auth::user()->id,
            ];

            Question::Create($data);
            
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function questionDetail($question_id) {
        $question = Question::find($question_id);
        $answers = Answer::where("question_id", $question_id)->get();
        return View::make('questionDetail')->with(compact("question", "answers"));
    }
    
    public function answer($question_id) {
        if(Auth::user()) {
            \request()->validate([
                "answer" => "required",
            ]);

            $content = request("answer");

            $data = [
                    "content" => $content,
                    "user_id" => Auth::user()->id,
                    "question_id" => $question_id,
            ];

            Answer::Create($data);
            
            return redirect('/question/' . $question_id);
        } else {
            return redirect('/login');
        }
    }
}
