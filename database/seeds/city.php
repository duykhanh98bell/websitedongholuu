<?php

use Illuminate\Database\Seeder;

class city extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->delete();
        DB::table('city')->insert([
        	['id'=>1,'name'=>'Hà Nội','slug'=>'Ha-noi'],
        	['id'=>2,'name'=>'Hải phòng','slug'=>'hai-phong'],
        	['id'=>3,'name'=>'Quảng Ninh','slug'=>'quang-ninh'],
        	['id'=>4,'name'=>'TP Hồ Chí Minh','slug'=>'tp-ho-chi-minh'],
        	['id'=>5,'name'=>'Cần Thơ','slug'=>'can-tho'],
        	['id'=>6,'name'=>'Đà Nẵng','slug'=>'da-nang'],
        	['id'=>7,'name'=>'Lào Cai','slug'=>'lao-cai'],
        	['id'=>8,'name'=>'Yên Bái','slug'=>'yen-bai']
        ]);
    }
}
