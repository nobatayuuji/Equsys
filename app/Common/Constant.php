<?php

namespace App\Common;


class Constant{

    /*
    *定数
    */

    //フォーム名からDBカラム名取得
    const colname = array('equ_id' => 'equipments.id',
                          'equ_name' => 'equ_name_hf',
                          'cate_equ' => 'category_equ_id',
                          'use_base' => 'use_base_in_hs',
                          'label' => 'label_code_hs',
                          'ipadress' => 'ip_adrs_en_hs',
                          'use_name' => 'use_name_hf'
                        );

    const wildsearch = array('equ_name_hf',
                          'label_code_hs',
                          'ip_adrs_en_hs',
                          'use_name_hf'
                        );


}
