<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model
{
    use HasFactory;

		protected $table = 'answer_question';

		public function question()
		{
			return $this->belongsTo(Question::class);
		}

		public function answer()
		{
			return $this->belongsTo(Answer::class);
		}
}
