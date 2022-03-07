<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->insert([
            ['title_en' =>'sdasd','title_ar' => 'dasdasgmail.com','code'=> 'AC','flag' => 'flag'],
            ['title_en' =>'sdasd','title_ar' => 'dasdasgmail.com','code'=> 'AXC','flag' => 'flag'],
            ['title_en' =>'sdasd','title_ar' => 'dasdasgmail.com','code'=> 'AaaC','flag' => 'flag']
        ]);
        
    }
}
