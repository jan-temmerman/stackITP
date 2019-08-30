<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content',
    ];

    public function user() {
        return $this->belongsTo("App/Users", "user_id");
    }
}
