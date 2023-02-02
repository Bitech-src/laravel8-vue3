<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use App\Models\LoginRole;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $login_id = Login::where('user_id',Auth::user()->id)->first();
        // 権限数取得
        $count = LoginRole::where('login_id',$login_id->pid)->count();

        if($count >= 2){
            // 権限選択画面へ
            return view('selectHome');
        }else{
            // 対象のHOME画面へ
            return view('home');
        }
    }

    
    public function showUser()
    {
        return view('home');
    }
    
    public function showAdmin()
    {
        // TODO Admin\Manager\BaseControllerを継承したコントローラで定義
        return view('home');
    }
}
