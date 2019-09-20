<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryEqusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'category_name_hf' => 'PC',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => 'モニター',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => '周辺機器',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => '書籍',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => 'ソフトウェア',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => '家電製品',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => '日用雑貨',
      ];
      DB::table('category_equs')->insert($param);

      $param = [
        'category_name_hf' => 'その他',
      ];
      DB::table('category_equs')->insert($param);
    }
}
