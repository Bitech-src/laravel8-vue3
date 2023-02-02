<?php

namespace App\Http\Controllers\Admin\Manager;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\LoginService;
use Illuminate\Support\Facades\Redirect;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
    * ロール制御
    */
    public function rollControl($login_id,$service_id)
	{
        
        $role_id = 1; // Manager用
        // サービス取得
        $login_service = LoginService::where('login_id',$login_id)
                                        ->where('role_id',$role_id)
                                        ->where('service_id',$service_id)
                                        ->first();
        
        // 取得できない場合は、HOMEへ
        if(is_null($login_service)){
            Redirect::route('home')->withErrors(['redirect'=>'エラー発生'])->throwResponse();
        }
        return;
    }
}