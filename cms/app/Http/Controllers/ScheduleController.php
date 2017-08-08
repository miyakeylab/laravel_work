<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Carbon\Carbon;

class ScheduleController extends Controller
{
        
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     *  メイン画面表示
     **/   
    public  function RootView() {
    
        return view('my_schedule' );
    }
    /**
     *  追加画面表示 
     **/
    public function ScheView() {
        return view('my_schedule');
    }
}
