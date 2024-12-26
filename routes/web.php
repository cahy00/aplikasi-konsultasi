<?php

use App\Models\City;
use App\Models\Answer;
use App\Models\Banner;
use App\Models\Question;
use GuzzleHttp\Psr7\Request;
use App\Models\AnswerQuestion;
use App\Models\QuestionCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Website\LandingController;


// Route::get('/', [QuestionController::class, 'all']);
Route::get('all-question', [QuestionController::class, 'all']);

Route::post('/question', [QuestionController::class, 'store']);
Route::get('/category/{id}', [QuestionController::class, 'allCategory']);
Route::get('/city/{id}', [QuestionController::class, 'allCity']);

Route::get('/', [LandingController::class,'index']);
Route::get('/detail-post/{slug}', [LandingController::class,'show']);
Route::get('/index2', [LandingController::class,'sidedata']);
// Route::get('/', [LandingController::class,'functionHeadline']);



