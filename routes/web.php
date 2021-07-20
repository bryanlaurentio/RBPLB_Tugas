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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'diplayHalamanUtama'])->name('home')->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');

// Auth::routes();
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
Route::post('/profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
Route::get('usermanual', [App\Http\Controllers\HomeController::class, 'displayHalamanUserManual'])->name('usermanual')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');


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

Route::delete('material/delete/{codeOfMaterial}', [App\Http\Controllers\MaterialController::class, 'deleteMaterial'])->name('materials.deleteMaterial')->middleware('auth')->middleware('checkRole:Tutor,Admin');

// Route::get('material/detailMaterial/{codeOfMaterial}/{file_name}', [App\Http\Controllers\MaterialController::class, 'downloadFile'])->name("downloadFile");
//Route::get('material/detailMaterial/{codeOfMaterial}/download', [App\Http\Controllers\MaterialController::class, 'getDownload'])->name('materials.downloadMaterial')->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin,Non Membership');
// Forum Diskusi
Route::get('forumDiskusi', [App\Http\Controllers\DiscussionTopicController::class, 'displayDiscussionForum'])->name('forumDiskusi')->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::get('forumDiskusi/createDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormCreateDiscussionTopic'])->name('forumDiskusi.createDiscussionTopic')->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::post('forumDiskusi/createDiscussionTopic/storeDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'createDiscussionTopic'])->name("forumDiskusi.createDiscussionTopic.storeDiscussionTopic")->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::get('forumDiskusi/topikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayDetailDiscussionTopic'])->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::get('forumDiskusi/topikDiskusi/buatJawaban/{codeOfTopic}', [App\Http\Controllers\AnswerController::class, 'displayFormCreateAnswer'])->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::post('forumDiskusi/createAnswer/storeAnswer', [App\Http\Controllers\AnswerController::class, 'storeAnswer'])->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::get('forumDiskusi/topikDiskusi/buatKomentar/{codeOfTopic}', [App\Http\Controllers\CommentController::class, 'displayFormCreateComment'])->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::post('forumDiskusi/createAnswer/storeComment', [App\Http\Controllers\CommentController::class, 'storeComment'])->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::get('forumDiskusi/editTopikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'displayFormEditDiscussionTopic'])->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::post('forumDiskusi/editTopikDiskusi/updateTopikDiskusi/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'updateDiscussionTopic'])->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::get('forumDiskusi/delete/{codeOfTopic}', [App\Http\Controllers\DiscussionTopicController::class, 'deleteDiscussionTopic'])->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::get('forumDiskusi/topikDiskusi/buatLampiran/{codeOfTopic}', [App\Http\Controllers\AttachmentController::class, 'displayFormCreateAttachment'])->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin');
Route::get('material/searchDiscussionTopic', [App\Http\Controllers\DiscussionTopicController::class, 'searchDiscussionForum'])->name('forumDiskusi.searchDiscussionTopic')->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
Route::post('forumDiskusi/createAttachment/storeAttachment', [App\Http\Controllers\AttachmentController::class, 'storeAttachment'])->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
Route::get('forumDiskusi/topikDiskusi/lampiran/{codeOfTopic}', [App\Http\Controllers\AttachmentController::class, 'displayAttachment'])->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');


// LIVE TUTOR
Route::get('liveTutor', [App\Http\Controllers\LiveTutorController::class, 'index'])->name('liveTutor')->middleware('auth')->middleware('checkRole:Membership,Non Membership,Tutor,Admin');
//createliveTutor
Route::get('liveTutor/createLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'displayFormCreateLiveTutor'])->name('liveTutor.createLiveTutor')->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::post('liveTutor/createLiveTutor/storeLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'createLiveTutor'])->name("liveTutor.createLiveTutor.storeLiveTutor")->middleware('auth')->middleware('checkRole:Tutor,Admin');
// ini rencananya halaman live tutor untuk Pengguna Route::get('liveTutor', [App\Http\Controllers\LiveTutorController::class, 'index'])->name('liveTutor');
//detailliveTutor
Route::get('liveTutor/detailLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'displayHalamanDetailLiveTutor'])->name('liveTutor.displayHalamanDetailLiveTutor')->middleware('auth')->middleware('checkRole:Membership,Tutor,Admin,Non Membership');
//editliveTutor
Route::get('liveTutor/displayHalamanEditLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'displayHalamanEditLiveTutor'])->name('liveTutor.displayHalamanEditLiveTutor')->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::patch('liveTutor/displayHalamanEditLiveTutor/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'editLiveTutor'])->name('liveTutor.displayHalamanEditLiveTutor.editLiveTutor')->middleware('auth')->middleware('checkRole:Tutor,Admin');
//hapusliveTutor
Route::delete('liveTutor/delete/{codeLiveTutor}', [App\Http\Controllers\LiveTutorController::class, 'deleteLiveTutor'])->name('liveTutor.deleteLiveTutor')->middleware('auth')->middleware('checkRole:Tutor,Admin');
//requestliveTutor
Route::get('liveTutor/requestLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'displayFormRequestLiveTutor'])->name('liveTutor.requestLiveTutor')->middleware('auth')->middleware('checkRole:Tutor,Admin');
Route::post('liveTutor/requestLiveTutor/storeLiveTutor', [App\Http\Controllers\LiveTutorController::class, 'requestLiveTutor'])->name("liveTutor.requestLiveTutor.storeLiveTutor")->middleware('auth')->middleware('checkRole:Tutor,Admin');

//Membership
Route::get('membership', [App\Http\Controllers\MembershipController::class, 'index'])->name('membership');

//Admin
Route::get('admin', [App\Http\Controllers\AdminController::class, 'displayHalamanAdmin'])->name('admin')->middleware('auth')->middleware('checkRole:Admin');

Route::get('admin/displayHalamanEditRole/{id}', [App\Http\Controllers\AdminController::class, 'displayHalamanEditRole'])->name('admin.displayHalamanEditRole')->middleware('auth')->middleware('checkRole:Admin');
Route::patch('admin/displayHalamanEditRole/{id}', [App\Http\Controllers\AdminController::class, 'editRole'])->name('admin.displayHalamanEditRole.editRole')->middleware('auth')->middleware('checkRole:Admin');
