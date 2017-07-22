<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Books;
use Validator;
use Carbon\Carbon;

class BooksController extends Controller
{
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
     * */
    public function Updata(Request $request)
    {
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
    
    public function RegView() {
    
        $books = Books::orderBy('created_at', 'asc')->get();
        
        return view('books_reg', ['books' => $books]);
    }
       
    public  function RootView(Books $book) {
    
        $books = Books::orderBy('created_at', 'asc')->get();
        return view('books', ['books' => $books]);
    }
    
    public  function Delete(Books $book) {
        $book->delete();
        return redirect('/books_reg');
            
    }
}
