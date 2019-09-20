<?php

namespace App\Http\Middleware;

use Closure;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //現在のセッションIDを取得
        $newid = session()->getId();

        //ログイン時のセッションIDを取得
        $oldid =session('sessionid');

        //ユーザ情報のnullチェック
        $nullcheck = session()->has('users');

        //現在とログイン時のユーザが同じが比較
        if ($oldid == $newid && $nullcheck == true){
          return $next($request);
        }else{
          //強制ログアウト
          return redirect('/login');
        };

    }
}
