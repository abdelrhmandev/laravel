<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $items = [
        ['city_id'=>'1'], // cairo
        ['city_id'=>'1'], // cairo
        ['city_id'=>'1'], // cairo
        ['city_id'=>'1'], // cairo
        ['city_id'=>'2'], // giza
        ['city_id'=>'2'], // giza
        ['city_id'=>'2'], // giza
        ['city_id'=>'3'], // alex
        ['city_id'=>'3'], // alex
        ['city_id'=>'3'], // alex
       ];
       DB::table('areas')->insert($items);      

       $translated_items = [
            ['title'=>'Zamalek','slug'=>'zamalek','lang'=>'en','area_id'=>'1'],
            ['title'=>'الزمالك','slug'=>'الزمالك','lang'=>'ar','area_id'=>'1'],

            ['title'=>'Maadi','slug'=>'maadi','lang'=>'en','area_id'=>'1'],
            ['title'=>'المعادي','slug'=>'المعادي','lang'=>'ar','area_id'=>'1'],

            ['title'=>'Heliopolis','slug'=>'heliopolis','lang'=>'en','area_id'=>'1'],
            ['title'=>'مصر الجديده','slug'=>'مصر الجديده','lang'=>'ar','area_id'=>'1'],

            ['title'=>'Nasr City','slug'=>'nasr-city','lang'=>'en','area_id'=>'1'],
            ['title'=>'مدينة نصر','slug'=>'مدينة نصر','lang'=>'ar','area_id'=>'1'],            

            ['title'=>'New Cairo','slug'=>'New Cairo','lang'=>'en','area_id'=>'1'],
            ['title'=>'القاهرة الجديده','slug'=>'القاهرة الجديده','lang'=>'ar','area_id'=>'1'],
 
            ['title'=>'6th of October City','slug'=>'6th-of-october-city','lang'=>'en','area_id'=>'2'],
            ['title'=>'السادس من أكتوبر','slug'=>'السادس من أكتوبر','lang'=>'ar','area_id'=>'2'],

            ['title'=>'Sheikh Zayed','slug'=>'sheikh-zayed','lang'=>'en','area_id'=>'2'],
            ['title'=>'الشيخ زايد','slug'=>'الشيخ زايد','lang'=>'ar','area_id'=>'2'],

            ['title'=>'Agouza','slug'=>'agouza','lang'=>'en','area_id'=>'2'],
            ['title'=>'العجوزة','slug'=>'العجوزة','lang'=>'ar','area_id'=>'2'],            

            ['title'=>'Borg Al Arab','slug'=>'borg-al-arab','lang'=>'en','area_id'=>'3'],
            ['title'=>'برج العرب','slug'=>'برج العرب','lang'=>'ar','area_id'=>'3'],

            ['title'=>'Smoha','slug'=>'smoha','lang'=>'en','area_id'=>'3'],
            ['title'=>'سموحه','slug'=>'سموحه','lang'=>'ar','area_id'=>'3'],

       ];
       DB::table('area_translations')->insert($translated_items);  

    }
}
