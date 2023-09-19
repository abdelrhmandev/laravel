<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecipeTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('recipe_post')->delete();

 
        
       $items = [        
        ['recipe_id'=>'1','tag_id'=>'1'], 
        ['recipe_id'=>'1','tag_id'=>'2'],
        ['recipe_id'=>'1','tag_id'=>'3'],
        ['recipe_id'=>'2','tag_id'=>'4'],
        ['recipe_id'=>'2','tag_id'=>'5'],
        ['recipe_id'=>'3','tag_id'=>'3'],
        ['recipe_id'=>'3','tag_id'=>'2'],
        ['recipe_id'=>'4','tag_id'=>'3'],
        ['recipe_id'=>'4','tag_id'=>'5'],        
    ];
       DB::table('recipe_tag')->insert($items);      

    }
}
