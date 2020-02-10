<?php

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


//Multi language
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

// da cambiare con la nostra home(?)
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home'); ---> funziona

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function() {
    Route::resource('/users', 'UserController', ['except' => ['create', 'store']]);
    Route::resource('/modules', 'ModuleController');
    Route::resource('/questions', 'QuestionController');
    Route::resource('/groups', 'GroupController');
    Route::resource('/surveys', 'SurveyController');
    Route::get('/surveys/{id}/create', 'SurveyController@create');
    Route::get('/impersonate/user/{id}', 'ImpersonateController@index')->name('impersonate');
    Route::get('/surveys/{id}/view', 'SurveyController@view')->name('surveys.view');
    Route::get('/new-survey', 'SurveyController@new')->name('surveys.new');
    Route::get('/surveys/{id}/closeSurvey', 'SurveyController@closeSurvey')->name('surveys.closeSurvey');
    Route::get('/index', 'HomeController@index')->name('index');
    Route::post('/modules/getmodules', 'ModuleController@modules')->name('modules.getmodules');
    Route::post('/modules/getquestions', 'ModuleController@questions')->name('modules.getquestions');
    Route::post('/modules/importquestions', 'ModuleController@importQuestions')->name('modules.importquestions');
    Route::post('/surveys/getsurveys', 'SurveyController@surveys')->name('surveys.getsurveys');
    Route::post('/surveys/getquestions', 'SurveyController@questions')->name('surveys.getquestions');
    Route::post('/surveys/importquestions', 'SurveyController@importQuestions')->name('surveys.importquestions');
    Route::post('/users/search', 'UserController@searchUser')->name('users.search');
    Route::post('/groups/search', 'GroupController@searchUser')->name('groups.search');
});

Route::get('/admin/impersonate/destroy', 'Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');

Route::namespace('User')->prefix('user')->middleware(['auth', 'auth.user'])->name('user.')->group(function() {
    Route::resource('/surveys', 'SurveyController');
    Route::resource('/user', 'UserController');
    Route::get('/surveys/{id}/create', 'SurveyController@create');
    Route::get('/surveys/{id}/show', 'SurveyController@show');
    Route::resource('/groups', 'GroupController');
    Route::get('/index', 'HomeController@index')->name('index');
    Route::post('/surveys/create', 'SurveyController@search')->name('surveys.search');
});


