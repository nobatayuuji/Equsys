<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class MainFormController extends Controller
{
  public function index(){
    //ユーザ情報
    $users = session()->get('users');
    $sessionid =session()->getId();
    $param = ['loginname' => $users->user_name_hf,
              'adminflg' => $users->admin_flag_hs
             ];

    return view('/form/mainform',$param);
  }
}
