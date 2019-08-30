<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

use App\Models\Question;

class QuestionsController extends Controller
{
    public function home() {
        return View::make('questions');
    }

    public function saveQuestion() {
        \request()->validate([
			"question" => "required",
		]);

		$content = request("question");

		$data = [
                "content" => $content,
        ];

		Question::Create($data);
		
        return View::make('questions');
    }
}
