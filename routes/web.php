<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//BRYAN
Route::resource('material', 'MaterialController');

// RIKI
Route::get('/discussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'displayDiscussionTopic']);
Route::get('/formCreateDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormCreateDiscussionTopic']);
Route::post('/formCreateDiscussionTopic/create', [App\Http\Controllers\DiscussionTopicController::class, 'createDiscussionTopic']);
Route::get('/discussionTopic/edit/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormEditDiscussionTopic']);
Route::post('/discussionTopic/update/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'updateDiscussionTopic']);
Route::get('/discussionTopic/delete/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'deleteDiscussionTopic']);
