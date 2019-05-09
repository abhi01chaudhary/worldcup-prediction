<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class QuestionOption extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id')->withTrashed();
    }
}
