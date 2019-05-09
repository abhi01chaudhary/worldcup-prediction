<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionOption;

class Question extends Model
{
    protected $guarded = [];

    public function options()
    {
        return $this->hasMany(QuestionOption::class, 'question_id')->withTrashed();
    }
}
