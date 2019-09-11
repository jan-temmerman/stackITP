<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected $fillable = [
        'content',
    ];

    public function user() {
        return $this->belongsTo("App\User", "user_id");
    }

    public function answer() {
        return $this->hasMany("App\Models\Answer");
    }
}
