<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Books;
use Validator;
use Carbon\Carbon;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /**
     *   データ登録処理
     * */
    public function newData(Request $request)
    {
           //バリデーション
        $validator = Validator::make($request->all(), [
                'item_name' => 'required|min:3|max:255',
                'item_number' => 'required|max:99999',
                'item_amount' => 'required|max:99999',
                'item_page' => 'required|max:5000',
                'item_time' => 'required|max:500',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
                return redirect('/books_reg')
                    ->withInput()
                    ->withErrors($validator);
        }
            // Eloquent モデル
        $books = new Books;
        $books->item_name = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->item_page = $request->item_page;
        $books->item_time = $request->item_time;
        $books->published = Carbon::now();
        $books->save();   //「/」ルートにリダイレクト 
        return redirect('/books_reg');
    } 
    
    /**
     *   データ更新処理
     **/
    public function Updata(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
                'item_name' => 'required|max:255',                
                'item_number' => 'required|max:99999',
                'item_amount' => 'required|max:99999',
                'item_page' => 'required|max:5000',
                'item_time' => 'required|max:500',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
                return redirect('/books_reg')
                    ->withInput()
                    ->withErrors($validator);
        }
            // Eloquent モデル
        $books = Books::find($request->item_id);
        $books->item_name = $request->item_name;
        $books->item_page = $request->item_page;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->item_time = $request->item_time;
        $books->published = Carbon::now();
        $books->save();   //「/」ルートにリダイレクト 
        return redirect('/books_reg');
    } 
    
    /**
     *  登録画面表示
     **/
    public function RegView() {
    
        $books = Books::orderBy('created_at', 'asc')->get();
        
        return view('books_reg', ['books' => $books]);
    }
    /**
     *  メイン画面表示
     **/   
    public  function RootView() {
    
        return view('/my_schedule' );
    }
    /**
     *  削除処理
     **/
    public  function Delete(Books $book) {
        $book->delete();
        return redirect('/books_reg');
            
    }
    
    /**
     *  追加画面表示 
     **/
    public function ModView(Books $book) {
        
        return view('books_mod', ['books' => $book]);
    }
    
    /**
     *  追加画面表示 
     **/
    public function ScheView() {
        return view('my_schedule');
    }
}
