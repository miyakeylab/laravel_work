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
* 新 「本」 を 追加 
*/ 
Route::post('/books_reg', 'BooksController@newData');
/**
* 本 を 削除 
*/ 
Route::delete('/books_reg/{book}','BooksController@Delete');
/**
 * 登録画面へ遷移
 */
Route::get('/books_reg', 'BooksController@RegView'); 
/** 
* 更新画面へ遷移
*/ 
Route::get('/books_mod/{book}', function (Books $book) {
    
    return view('books_mod', ['books' => $book]);
}); 
/**
* 「本」 を 更新 
*/ 
Route::post('/books_mod', 'BooksController@Updata');
/** 
* スケジュール 表示 
*/ 
Route::get('/my_schedule', function () {
    
    return view('my_schedule');

}); 