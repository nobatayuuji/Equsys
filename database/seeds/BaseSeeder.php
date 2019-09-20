<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'base_name_hf' => '奄美',
      ];
      DB::table('base_infos')->insert($param);

      $param = [
        'base_name_hf' => '鹿児島',
      ];
      DB::table('base_infos')->insert($param);

      $param = [
        'base_name_hf' => '福岡',
      ];
      DB::table('base_infos')->insert($param);

      $param = [
        'base_name_hf' => '本社',
      ];
      DB::table('base_infos')->insert($param);
    }
}
