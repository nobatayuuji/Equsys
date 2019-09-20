<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'category_name_hf' => 'ESET',
      ];
      DB::table('category_lics')->insert($param);

      $param = [
        'category_name_hf' => 'Office',
      ];
      DB::table('category_lics')->insert($param);

      $param = [
        'category_name_hf' => 'その他',
      ];
      DB::table('category_lics')->insert($param);
    }
}
