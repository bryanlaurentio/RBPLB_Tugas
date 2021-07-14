<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

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

// Auth::routes();
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::put('/profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('usermanual', [App\Http\Controllers\HomeController::class, 'displayHalamanUserManual'])->name('usermanual');


// Auth::routes();
// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// Route::resource('profile', '\App\Http\Controllers\ProfileController');

Route::group(['middleware' => 'auth'], function () {
//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
//Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
//Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
Route::get('map', function () {return view('pages.maps');})->name('map');
Route::get('icons', function () {return view('pages.icons');})->name('icons');
Route::get('table-list', function () {return view('pages.tables');})->name('table');
//Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


//materi
Route::get('material', [App\Http\Controllers\MaterialController::class, 'displayHalamanMateri'])->name('materials')->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');

Route::get('material/detailMaterial/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'displayHalamanDetailMateri'])->name('materials.displayHalamanDetailMateri')->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin,Non Membership');

Route::get('material/displayHalamanUploadMateri', [App\Http\Controllers\MaterialController::class, 'displayHalamanUploadMateri'])->name('materials.displayHalamanUploadMateri')->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::post('material/displayHalamanUploadMateri/storeMaterial', [App\Http\Controllers\MaterialController::class, 'addMaterial'])->name("materials.displayHalamanUploadMateri.storeMaterial")->middleware('auth')->middleware('checkRole:Tutor,Admin');

Route::get('material/displayHalamanEditMateri/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'displayHalamanEditMateri'])->name('materials.displayHalamanEditMateri')->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::patch('material/displayHalamanEditMateri/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'editMaterial'])->name('materials.displayHalamanEditMateri.editMaterial')->middleware('auth')->middleware('checkRole:Tutor,Admin');

Route::get('material/searchMaterial', [App\Http\Controllers\MaterialController::class, 'searchMaterial'])->name('materials.searchMaterial')->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');

Route::delete('material.delete.{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'deleteMaterial'])->name('materials.deleteMaterial')->middleware('auth')->middleware('checkRole:Tutor,Admin');


// Forum Diskusi
Route::get('forumDiskusi', [App\Http\Controllers\DiscussionTopicController::class, 'index'])->name('forumDiskusi')->middleware('auth');
Route::get('forumDiskusi/createDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormCreateDiscussionTopic'])->name('forumDiskusi.createDiscussionTopic')->middleware('auth');
Route::post('forumDiskusi/createDiscussionTopic/storeDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'createDiscussionTopic'])->name("forumDiskusi.createDiscussionTopic.storeDiscussionTopic")->middleware('auth');
Route::get('forumDiskusi/topikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayDetailDiscussionTopic'])->middleware('auth');
Route::get('forumDiskusi/topikDiskusi/buatJawaban/{codeOfTopic}', [App\Http\Controllers\AnswerController::class, 'displayFormCreateAnswer'])->middleware('auth');
Route::post('forumDiskusi/createAnswer/storeAnswer', [App\Http\Controllers\AnswerController::class, 'storeAnswer'])->middleware('auth');
Route::get('forumDiskusi/topikDiskusi/buatKomentar/{codeOfTopic}', [App\Http\Controllers\CommentController::class, 'displayFormCreateComment'])->middleware('auth');
Route::post('forumDiskusi/createAnswer/storeComment', [App\Http\Controllers\CommentController::class, 'storeComment'])->middleware('auth');
Route::get('forumDiskusi/editTopikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormEditDiscussionTopic'])->middleware('auth');
Route::post('forumDiskusi/editTopikDiskusi/updateTopikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'updateDiscussionTopic'])->middleware('auth');
Route::get('forumDiskusi/delete/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'deleteDiscussionTopic'])->middleware('auth');
Route::get('forumDiskusi/topikDiskusi/buatLampiran/{codeOfTopic}', [App\Http\Controllers\AttachmentController::class, 'displayFormCreateAttachment'])->middleware('auth');
Route::get('material/searchDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'searchDiscussionForum'])->name('forumDiskusi.searchDiscussionTopic')->middleware('auth');;
//Route::post('forumDiskusi/createAttachment/storeAttachment', [App\Http\Controllers\AttachmentController::class, 'storeAttachment'])->middleware('auth');


// Live Tutor
Route::get('liveTutor', [App\Http\Controllers\LiveTutorController::class, 'index'])->name('liveTutor');
Route::get('liveTutor/createLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'displayFormCreateLiveTutor'])->name('liveTutor.createLiveTutor');
Route::post('liveTutor/createLiveTutor/storeLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'createLiveTutor'])->name("liveTutor.createLiveTutor.storeLiveTutor");
// ini rencananya halaman live tutor untuk Pengguna Route::get('liveTutor', [App\Http\Controllers\LiveTutorController::class, 'index'])->name('liveTutor');
Route::get('liveTutor/detailLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'displayHalamanDetailLiveTutor'])->name('liveTutor.displayHalamanDetailLiveTutor');

Route::get('liveTutor/displayHalamanEditLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'displayHalamanEditLiveTutor'])->name('liveTutor.displayHalamanEditLiveTutor');
Route::patch('liveTutor/displayHalamanEditLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'editLiveTutor'])->name('liveTutor.displayHalamanEditLiveTutor.editLiveTutor');

Route::delete('liveTutor/delete/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'deleteLiveTutor'])->name('liveTutor.deleteLiveTutor');


//Membership
Route::get('membership', [App\Http\Controllers\MembershipController::class, 'index'])->name('membership');

//Admin
Route::get('admin', [App\Http\Controllers\AdminController::class, 'displayHalamanAdmin'])->name('admin')->middleware('auth');

Route::get('admin/displayHalamanEditRole/{id}', [App\Http\Controllers\AdminController::class, 'displayHalamanEditRole'])->name('admin.displayHalamanEditRole')->middleware('auth');;
Route::patch('admin/displayHalamanEditRole/{id}', [App\Http\Controllers\AdminController::class, 'editRole'])->name('admin.displayHalamanEditRole.editRole')->middleware('auth');;
