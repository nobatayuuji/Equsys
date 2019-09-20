<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Common\Commonparts;
use App\Equipment;
use App\Common\Constant;

class EquSearchController extends Controller
{
      public function index(){

        //プルダウンリスト
        $com = new Commonparts;
        $cate = $com->CategorGet_equ();
        $base = $com->CategorGet_base();

        //ユーザ名取得
        $users = session()->get('users');

        //パラメタ
        $param = ['loginname' => $users->user_name_hf,
                  'adminflg' => $users->admin_flag_hs,
                  'cate' => $cate,
                  'base' => $base,
                  'equ' => ''
                 ];

        return view('/form/equsearch',$param);

      }

      public function createlist(Request $request){

        //\Illuminate\Support\Facades\DB::enableQueryLog();
        //検索sql作成
        $query = Equipment::select('equipments.id','category_equ_id','equ_name_hf','use_name_hf','use_base_in_hs','ip_adrs_en_hs')
                ->join('device_infos','equipments.id','=','device_infos.equipment_id');
          dd($request);      
        foreach ($request
          ->only('equ_id','equ_name','cate_equ','use_base',
                    'label','ipadress','use_name,') as $key=> $value) {
            if(!empty($value)){
              if(in_array($key,Constant::wildsearch)){
                $query->where(Constant::colname[$key],'like','%'.$value.'%');
              }else{
                $query->where(Constant::colname[$key],'like',$value);
              }
            }
        }
        $equ = $query->Paginate(20);

        //dd(\Illuminate\Support\Facades\DB::getQueryLog());

        //user table
        $users = session()->get('users');


        //pulldownlist
        $com = new Commonparts;
        $cate = $com->CategorGet_equ();
        $base = $com->CategorGet_base();

        $param = ['loginname' => $users->user_name_hf,
                  'adminflg' => $users->admin_flag_hs,
                  'cate' => $cate,
                  'base' => $base,
                  'equ' => $equ
                 ];

        return view('/form/equsearch',$param);
      }
      public function aaa(Request $request){
        dd('aaaa');
      }
    }
