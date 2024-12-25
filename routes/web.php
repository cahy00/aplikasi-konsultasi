<?php

use App\Http\Controllers\QuestionController;
use App\Models\Answer;
use App\Models\AnswerQuestion;
use App\Models\City;
use App\Models\Question;
use App\Models\QuestionCategory;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Route::get('/', [QuestionController::class, 'all']);
Route::get('all-question', [QuestionController::class, 'all']);

Route::post('/question', [QuestionController::class, 'store']);
Route::get('/category/{id}', [QuestionController::class, 'allCategory']);
Route::get('/city/{id}', [QuestionController::class, 'allCity']);

Route::get('/', function(){
  return view('website.pages.landing');
});

// Route::get('/index2', function(){
//   return view('ask.index2');
// });

