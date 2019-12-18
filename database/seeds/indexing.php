<?php

use Illuminate\Database\Seeder;

class indexing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indexing')->delete();
        DB::table('indexing')->insert([
        	['id'=>'1','id_tags'=>'1','name'=>'Ban chấp hành','slug'=>'executive'],
        	['id'=>'2','id_tags'=>'1','name'=>'Quy chế','slug'=>'regulation'],
        	['id'=>'3','id_tags'=>'2','name'=>'Lịch sử dòng họ','slug'=>'clan-history'],
        	['id'=>'4','id_tags'=>'2','name'=>'Nghiên cứu lịch sử dòng họ','slug'=>'study-clan-history'],
        	['id'=>'5','id_tags'=>'3','name'=>'Cơ hội','slug'=>'opportunity'],
        	['id'=>'6','id_tags'=>'3','name'=>'CLB - Doanh nghiệp - Doanh nhân','slug'=>'company-club'],
        	['id'=>'7','id_tags'=>'3','name'=>'Công ty TNHH','slug'=>'company-TNHH'],
        	['id'=>'8','id_tags'=>'3','name'=>'CLB - Lão thành','slug'=>'laothanh-club'],
        	['id'=>'9','id_tags'=>'4','name'=>'Khuyến học khuyến tài','slug'=>'khuyen-hoc'],
        	['id'=>'10','id_tags'=>'4','name'=>'Hỗ trợ tài năng trẻ','slug'=>'support-talent'],
        	['id'=>'11','id_tags'=>'5','name'=>'CLB- thanh niên','slug'=>'youth-club'],
        	['id'=>'12','id_tags'=>'5','name'=>'Thanh niên tiêu biểu','slug'=>'tieu-bieu'],
        	['id'=>'13','id_tags'=>'5','name'=>'Lập thân lập nghiệp','slug'=>'lap-than-lap-nghiep'],
        	['id'=>'14','id_tags'=>'6','name'=>'Văn hóa NT','slug'=>'cultural'],
        	['id'=>'15','id_tags'=>'6','name'=>'Trại hè','slug'=>'summer-camp'],
        	['id'=>'16','id_tags'=>'6','name'=>'Văn bản','slug'=>'document'],
        	['id'=>'17','id_tags'=>'6','name'=>'Hình ảnh','slug'=>'images'],
        	['id'=>'18','id_tags'=>'7','name'=>'Bài viết thành viên','slug'=>'members-posts'],
        	['id'=>'19','id_tags'=>'7','name'=>'Thi đua khen thưởng','slug'=>'emulation-reward'],
        	['id'=>'20','id_tags'=>'8','name'=>'Văn hóa văn nghệ','slug'=>'culture-arts'],
        	['id'=>'21','id_tags'=>'8','name'=>'Văn bản','slug'=>'document'],
        	['id'=>'22','id_tags'=>'8','name'=>'Hình ảnh - video','slug'=>'image-video'],
        	['id'=>'23','id_tags'=>'8','name'=>'Khác','slug'=>'other']
        ]);
    }
}
