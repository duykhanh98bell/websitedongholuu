<?php

use Illuminate\Database\Seeder;

class tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tags')->delete();
        DB::table('tags')->insert([
        	['id'=>1,'name'=>'Giới thiệu','slug'=>'introduct'],
        	['id'=>2,'name'=>'Lịch sử dòng họ','slug'=>'clan-history'],
        	['id'=>3,'name'=>'Thông tin sự kiện','slug'=>'event-info'],
        	['id'=>4,'name'=>'Khuyến học khuyến tài','slug'=>'khuyen-hoc'],
        	['id'=>5,'name'=>'Người tốt việc tốt','slug'=>'good-people'],
        	['id'=>6,'name'=>'Thư viện','slug'=>'library'],
        	['id'=>7,'name'=>'Cộng đồng','slug'=>'community'],
        	['id'=>8,'name'=>'Góp ý','slug'=>'feedback']
        ]);
    }
}
