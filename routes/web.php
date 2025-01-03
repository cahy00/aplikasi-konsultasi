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
use App\Http\Controllers\Website\AnnouncementController;


// Route::get('/', [QuestionController::class, 'all']);
Route::get('all-question', [QuestionController::class, 'all']);

Route::post('/question', [QuestionController::class, 'store']);
Route::get('/category/{id}', [QuestionController::class, 'allCategory']);
Route::get('/city/{id}', [QuestionController::class, 'allCity']);

Route::get('/', [LandingController::class,'index']);
Route::get('/detail-post/{slug}', [LandingController::class,'show']);
Route::get('/announcement', [AnnouncementController::class,'index']);
Route::get('/detail-announcement/{id}', [AnnouncementController::class,'show']);
// Route::get('/', [LandingController::class,'functionHeadline']);



