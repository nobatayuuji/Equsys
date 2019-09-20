<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserinfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'user_code_en_hf' => 'admin',
          'password_pass_en_hf' => 'admin',
          'user_name_hf' => 'Administrator',
          'use_base_in_hs' => '1',
          'admin_flag_hs' => '1',
          'delete_flag_hs' => '0',
        ];
        DB::table('user_infos')->insert($param);

    }
}
