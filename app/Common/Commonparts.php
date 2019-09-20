<?php

namespace App\Common;

use App\CategoryEqu;
use App\BaseInfo;

class Commonparts{

  public function CategorGet_equ(){
    $cate = CategoryEqu::orderBy('id','asc')->pluck('category_name_hf', 'id')->prepend( "選択してください", "");
    return $cate;
  }

  public function CategorGet_base(){
    $base = BaseInfo::orderBy('id','asc')->pluck('base_name_hf', 'id')->prepend( "選択してください", "");
    return $base;
  }
}
