<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class ApiController extends Controller
{
    public function vote(Request $request) {
        $id  = $request->input('id');
        $vote = $request->input('vote');

        if($vote == "up") {
            Question::find($id)->increment('votes');
        } elseif($vote == "down") {
            Question::find($id)->decrement('votes');
        }
    }
}
