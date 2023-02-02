<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Admin\Manager\BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use App\Models\LoginRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends BaseController
{
    /**
     * 初期処理
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            // TODO サービスIDは文字列の方がよさそう
            $service_id = 1; // testData 権限内
            // $service_id = 3; // testData 権限外
            $login_id = Login::where('user_id',Auth::user()->id)->first();
            
            // 権限チェック
            $this->rollControl($login_id->pid,$service_id);
            return $next($request);
        });

    }

    /**
     * 対象画面遷移
     */
    public function index()
    {
        // $user = Auth::user();
        // $service_id = 3;
        // $login_id = Login::where('user_id',$user->id)->first();
        // $check = $this->rollControl($login_id->pid,$service_id); 

        // if(!$check){
        //     return redirect()->route('home');
        // }
        return view('admin.user_edit');
    }
}
