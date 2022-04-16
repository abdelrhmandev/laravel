<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       $items = [
        ['image'=>'uploads/recipes/farmers_grilled_cheese.jpg','recipe_category_id'=>'1','featured'=>'1','published'=>'1'], 
        ['image'=>'uploads/recipes/blt_pasta.jpg','recipe_category_id'=>'2','featured'=>'0','published'=>'1'],
        ['image'=>'uploads/recipes/baked_tilapia_in_lemon_butter_sauce.jpg','recipe_category_id'=>'3','featured'=>'1','published'=>'0'],
 
    ];
       DB::table('recipes')->insert($items);      

       $translated_items = [

        ['title'=>'Cheese, apple and walnut toastie','slug'=>'cheese-apple-and-walnut-toastie','description'=>'Cheese, apple and walnut toastie Cheese, apple and walnut toastie','lang'=>'en','recipe_id'=>'1'],
        ['title'=>'توست الجبن والتفاح والجوز','slug'=>'جبنة-تفاح-جوز-توست','description'=>'توست الجبن والتفاح والجوز توست الجبن والتفاح والجوز ','lang'=>'ar','recipe_id'=>'1'],

        ['title'=>'BLT Pasta','slug'=>'blt-pasta','description'=>'BLT Pasta','lang'=>'en','recipe_id'=>'2'],
        ['title'=>'BLT باستا','slug'=>'BLT- باستا','description'=>'BLT- باستا ','lang'=>'ar','recipe_id'=>'2'],

        ['title'=>'Baked Tilapia in Lemon Butter Sauce','slug'=>'baked-tilapia-in-lemon-butter-sauce-recipe','description'=>'Baked Tilapia in Lemon Butter Sauce','lang'=>'en','recipe_id'=>'3'],
        ['title'=>'سمك بلطي مطبوخ بصلصة الزبدة والليمون','slug'=>'سمك-بلطي-مطبوخ-بصلصة-الزبدة-والليمون','description'=>'سمك بلطي مطبوخ بصلصة الزبدة والليمون سمك بلطي مطبوخ بصلصة الزبدة والليمون ','lang'=>'ar','recipe_id'=>'3'],


 


       ];
       DB::table('recipe_translations')->insert($translated_items);  

    }
}
