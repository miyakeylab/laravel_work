<?php
use App\Books; 
use App\Schedule;
use Illuminate\Http\Request; 
use Carbon\Carbon;
/** 
* スケジュールホーム
*/ 
Route::get('/', 'ScheduleController@RootView');

/** 
* スケジュール 表示 
*/ 
Route::get('/my_schedule','ScheduleController@ScheView');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

/**
 * SNSログインリダイレクト
 */
Route::get('auth/{provide}','Auth\AuthController@redirectToProvider');
/**
 * SNSログインコールバック
 */
Route::get('auth/{provide}/callback','Auth\AuthController@handleProviderCallback');

