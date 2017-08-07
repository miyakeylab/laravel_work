<?php
use App\Books; 
use App\Schedule;
use Illuminate\Http\Request; 
use Carbon\Carbon;
/** 
* 本 のダッシュボード 表示 
*/ 
Route::get('/', 'BooksController@RootView');

/** 
* スケジュール 表示 
*/ 
Route::get('/my_schedule','BooksController@ScheView');

Route::auth();

Route::get('/home', 'HomeController@index');
