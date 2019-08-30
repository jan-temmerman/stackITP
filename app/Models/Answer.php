<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function user() {
        return $this->belongsTo("App/Users", "user_id");
    }

    public function question() {
        return $this->belongsTo("App/Models/Questions", "question_id");
    }
}
