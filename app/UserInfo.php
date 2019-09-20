<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    public function scopeNotDeleteUser(){
      return UserInfo::where('delete_flag_hs','!=','1');
    }
}
