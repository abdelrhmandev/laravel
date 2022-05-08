<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecipeNutrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $items = [
        ['nutration_id'=>'1','recipe_id'=>'1','amount'=>'30'], 
        ['nutration_id'=>'1','recipe_id'=>'2','amount'=>'45'], 
        ['nutration_id'=>'2','recipe_id'=>'2','amount'=>'12'],
        ['nutration_id'=>'3','recipe_id'=>'3','amount'=>'23'],
        ['nutration_id'=>'2','recipe_id'=>'4','amount'=>'44'],
        ['nutration_id'=>'1','recipe_id'=>'5','amount'=>'15'],
        ['nutration_id'=>'5','recipe_id'=>'2','amount'=>'36'],
        ['nutration_id'=>'4','recipe_id'=>'6','amount'=>'66'],
        ['nutration_id'=>'3','recipe_id'=>'7','amount'=>'138'],
    ];
       DB::table('recipe_nutration')->insert($items);      

    }
}
