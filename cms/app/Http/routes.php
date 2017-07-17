<?php
use App\Books; 
use Illuminate\Http\Request; 

/** 
* 本 のダッシュボード 表示 
*/ 
Route::get('/', function () {
    
    $books = Books::orderBy('created_at', 'asc')->get();
    return view('books', ['books' => $books]);
	 //
//	 return view('books');
}); 

/**
* 新 「本」 を 追加 
*/ 
Route::post('/books', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
            'item_name' => 'required|max:255',
    ]);
    //バリデーション:エラー
    if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
    }
        // Eloquent モデル
    $books = new Books;
    $books->item_name = $request->item_name;
    $books->item_number = '1';
    $books->item_amount = '1000';
    $books->published = '2017-03-07 00:00:00';
    $books->save();   //「/」ルートにリダイレクト 
    return redirect('/');
}); 

/**
* 本 を 削除 
*/ 
Route::delete('/books_reg/{book}', function (Books $book) {
    $book->delete();
    return redirect('/books_reg');
});
/**
 * 登録画面へ遷移
 */
Route::get('/books_reg', function () {
    
    $books = Books::orderBy('created_at', 'asc')->get();
    return view('books_reg', ['books' => $books]);
	 //
//	 return view('books');
}); 