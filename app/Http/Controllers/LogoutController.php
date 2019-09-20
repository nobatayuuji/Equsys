<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(){
      //sesstion削除
      session()->flush();
      //login画面へリダイレクト
      return redirect('/login');
    }
}
