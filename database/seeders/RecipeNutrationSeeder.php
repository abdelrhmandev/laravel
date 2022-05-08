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
        ['nutration_id'=>'1','recipe_id'=>'1','value'=>'30.5'], 
        ['nutration_id'=>'1','recipe_id'=>'2','value'=>'45.6'], 
        ['nutration_id'=>'2','recipe_id'=>'2','value'=>'12.0'],
        ['nutration_id'=>'3','recipe_id'=>'3','value'=>'23.12'],
        ['nutration_id'=>'2','recipe_id'=>'4','value'=>'44'],
        ['nutration_id'=>'1','recipe_id'=>'5','value'=>'150'],
        ['nutration_id'=>'5','recipe_id'=>'2','value'=>'361'],
        ['nutration_id'=>'4','recipe_id'=>'6','value'=>'1.66'],
        ['nutration_id'=>'3','recipe_id'=>'7','value'=>'13.8'],
    ];
       DB::table('recipe_nutration')->insert($items);      

    }
}
