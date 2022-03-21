<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $items = [
        ['area_id'=>'1'], // cairo , Zamalek
 
        ['area_id'=>'2'], // cairo , Nasr City
        ['area_id'=>'2'], // cairo , Nasr City
        ['area_id'=>'2'], // cairo , Nasr City

        ['area_id'=>'5'], // cairo , Heliopolis

        
       ];
       DB::table('districts')->insert($items);      

       $translated_items = [


            ['title'=>'Cairo Opera House','slug'=>'cairo-opera-house','lang'=>'en','district_id'=>'1'],
            ['title'=>'دار الأوبرا المصريه','slug'=>'دار-الأوبرا-المصريه','lang'=>'ar','district_id'=>'1'],


            ['title'=>'Abbas al-Aqqad','slug'=>'Abbas-al-Aqqad','lang'=>'en','district_id'=>'2'],
            ['title'=>'عباس العقاد','slug'=>'عباس-العقاد','lang'=>'ar','district_id'=>'2'],

            ['title'=>'Makram Ebeid','slug'=>'makram-ebeid','lang'=>'en','district_id'=>'2'],
            ['title'=>'مكرم عبيد','slug'=>'مكرم-عبيد','lang'=>'ar','district_id'=>'2'],      


            ['title'=>'Mostafa El-Nahas','slug'=>'mostafa-el-nahas','lang'=>'en','district_id'=>'2'],
            ['title'=>'مصطفي النحاس','slug'=>'مصطفي النحاس','lang'=>'ar','district_id'=>'2'],      


            ['title'=>'El Horreya Mall','slug'=>'el-horreya-mall','lang'=>'en','district_id'=>'5'],
            ['title'=>'حريه مول','slug'=>'حريه-مول','lang'=>'ar','district_id'=>'5'],

         
           

 

       ];
       DB::table('district_translations')->insert($translated_items);  

    }
}
