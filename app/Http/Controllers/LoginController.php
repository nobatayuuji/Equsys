<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\UserInfo;
use App\Common\Message;
use Validator;

use Illuminate\Contracts\Encryption\DecryptException;

class LoginController extends Controller
{
    public function index(){
      //ロガ


      //セッションID再発行
      session()->regenerate();

      return view('login/index',['msg' => Message::LOGINMSG]);

    }
    public function post(Request $request){
      //初期設定
      $loginOK = false;

        //データベース参照
        $db = UserInfo::NotDeleteUser()
                    ->where('password_pass_en_hf',$request->Password)
                    ->where('user_code_en_hf',$request->UserID)
                    ->first();

        //データが存在するか
        if ($db !== null){
          //セッションへ保持
          session()->put('users', $db);
          session()->put('sessionid',session()->getid());//セッション管理用

          //グローバル変数
          //config(['global.users_name' => $db->user_name_hf]);
          //画面遷移ON
          $loginOK = true;
        }

        //画面遷移判断
        if ($loginOK == true){
          //ホーム画面へ
          return redirect('/form/mainform');
        }else{
          return view('login/index',['msg' => Message::LOGINMSGERROR]);
        }

    }
}
