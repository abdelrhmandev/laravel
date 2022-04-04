<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecipelikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $items = [
        ['recipe_id'=>'1','user_id'=>'1','likes'=>'1'], 
        ['recipe_id'=>'2','user_id'=>'2','likes'=>'1'],
        ['recipe_id'=>'3','user_id'=>'3','likes'=>'1'],
        ['recipe_id'=>'2','user_id'=>'4','likes'=>'1'],

        
    ];
       DB::table('recipes_likes')->insert($items);      

    }
}
