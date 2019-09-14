<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Answer extends Model
{
    protected $fillable = [
        'content', 
        'question_id',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo("App\User", "user_id");
    }

    public function question() {
        return $this->belongsTo("App\Models\Question", "question_id");
    }
}
