<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $items = [
        ['published'=>'1','image'=>'uploads/banners/adidas.png'],
        ['published'=>'1','image'=>'uploads/banners/nike.png'],
        ['published'=>'1','image'=>'uploads/banners/kappa.png'],
        ['published'=>'1','image'=>'uploads/banners/prada.png'],
        ['published'=>'1','image'=>'uploads/banners/hermes.png'],
        
       ];
       DB::table('banners')->insert($items);      

       $translated_items = [


            ['title'=>'Adidas','slug'=>'adidas','lang'=>'en','banner_id'=>'1'],
            ['title'=>'أديداس','slug'=>'أديداس','lang'=>'ar','banner_id'=>'1'],


            ['title'=>'Nike','slug'=>'nike','lang'=>'en','banner_id'=>'2'],
            ['title'=>'نايك','slug'=>'نايك','lang'=>'ar','banner_id'=>'2'],

            ['title'=>'Kappa','slug'=>'kappa','lang'=>'en','banner_id'=>'3'],
            ['title'=>'كابا','slug'=>'كابا','lang'=>'ar','banner_id'=>'3'],      


            ['title'=>'Prada','slug'=>'prada','lang'=>'en','banner_id'=>'4'],
            ['title'=>'برادا ','slug'=>'برادا ','lang'=>'ar','banner_id'=>'4'],      


            ['title'=>'Hermes','slug'=>'hermes','lang'=>'en','banner_id'=>'5'],
            ['title'=>'هيرميس','slug'=>'هيرميس','lang'=>'ar','banner_id'=>'5'],

       ];
       DB::table('banner_translations')->insert($translated_items);  

    }
}
