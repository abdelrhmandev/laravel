<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $items = [
        ['image'=>'uploads/it.jpg','published'=>'1'],
        ['image'=>'uploads/programing.jpg','published'=>'1'],
        ['image'=>'uploads/it.jpg','published'=>'1'],
        ['image'=>'uploads/it.jpg','published'=>'0'],
        ['image'=>'uploads/it.jpg','published'=>'1'],
  
       ];
       DB::table('post_categories')->insert($items);      
       
       

       $translated_items = [

            ['title'=>'IT','slug'=>'alexandria','lang'=>'en','post_category_id'=>'1'],
            ['title'=>'نظم المعلومات','slug'=>'الإسكندرية','lang'=>'ar','post_category_id'=>'1'],

            ['title'=>'Programing','slug'=>'programing','lang'=>'en','post_category_id'=>'2'],
            ['title'=>'البرمجه','slug'=>'البرمجه','lang'=>'ar','post_category_id'=>'2'],

            ['title'=>'Design','slug'=>'design','lang'=>'en','post_category_id'=>'3'],
            ['title'=>'التصميم','slug'=>'التصميم','lang'=>'ar','post_category_id'=>'3'],

            ['title'=>'Social Net Work','slug'=>'social-net-work','lang'=>'en','post_category_id'=>'4'],
            ['title'=>'شبكات التواصل الأجتماعي','slug'=>'شبكات-التواصل-الأجتماعي','lang'=>'ar','post_category_id'=>'4'],

            ['title'=>'Security','slug'=>'Security','lang'=>'en','post_category_id'=>'5'],
            ['title'=>'امن المعلومات','slug'=>'امن-المعلومات','lang'=>'ar','post_category_id'=>'5'],  
            
       ];
       DB::table('post_categories_translations')->insert($translated_items);  

    }
}
