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

        //recipe_category_id 1 Snacks
        //recipe_category_id 2 Soups
        //recipe_category_id 3 Chicken
        //recipe_category_id 4 Beef
        //recipe_category_id 5 Pasta

       $items = [
        ['image'=>'uploads/recipes/farmers_grilled_cheese.jpg','recipe_category_id'=>'1','featured'=>'1','published'=>'1'], 
        ['image'=>'uploads/recipes/blt_pasta.jpg','recipe_category_id'=>'2','featured'=>'0','published'=>'1'],
        ['image'=>'uploads/recipes/baked_tilapia_in_lemon_butter_sauce.jpg','recipe_category_id'=>'3','featured'=>'1','published'=>'0'],
        ['image'=>'uploads/recipes/spicy-beef-taco-2cd04fc.jpg','recipe_category_id'=>'4','featured'=>'1','published'=>'0'],
        ['image'=>'uploads/recipes/healthy-chicken-pasta-bake-8c8fa07.jpg','recipe_category_id'=>'3','featured'=>'1','published'=>'0'],

        ['image'=>'uploads/recipes/creamy-mushroom-and-spinach-pasta-9b0582e.jpg','recipe_category_id'=>'4','featured'=>'1','published'=>'0'],

    ];
       DB::table('recipes')->insert($items);      

       $translated_items = [

        ['title'=>'Cheese, apple and walnut toastie','slug'=>'cheese-apple-and-walnut-toastie','description'=>'Cheese, apple and walnut toastie Cheese, apple and walnut toastie','lang'=>'en','recipe_id'=>'1'],
        ['title'=>'توست الجبن والتفاح والجوز','slug'=>'جبنة-تفاح-جوز-توست','description'=>'توست الجبن والتفاح والجوز توست الجبن والتفاح والجوز ','lang'=>'ar','recipe_id'=>'1'],

        ['title'=>'BLT Pasta','slug'=>'blt-pasta','description'=>'BLT Pasta','lang'=>'en','recipe_id'=>'2'],
        ['title'=>'BLT باستا','slug'=>'BLT- باستا','description'=>'BLT- باستا ','lang'=>'ar','recipe_id'=>'2'],

        ['title'=>'Baked Tilapia in Lemon Butter Sauce','slug'=>'baked-tilapia-in-lemon-butter-sauce-recipe','description'=>'Baked Tilapia in Lemon Butter Sauce','lang'=>'en','recipe_id'=>'3'],
        ['title'=>'سمك بلطي مطبوخ بصلصة الزبدة والليمون','slug'=>'سمك-بلطي-مطبوخ-بصلصة-الزبدة-والليمون','description'=>'سمك بلطي مطبوخ بصلصة الزبدة والليمون سمك بلطي مطبوخ بصلصة الزبدة والليمون ','lang'=>'ar','recipe_id'=>'3'],

        ['title'=>'Spicy beef taco bowl','slug'=>'spicy-beef-taco-bowl','description'=>'Get all five of your five-a-day in this Mexican-inspired spicy beef taco bowl. Full of textures and flavours, it can be partly prepped ahead','lang'=>'en','recipe_id'=>'4'],
        ['title'=>'صحن تاكو لحم بقري حار','slug'=>'صحن-تاكو-لحم-بقري-حار','description'=>'صحن تاكو لحم بقري حار صحن تاكو لحم بقري حار','lang'=>'ar','recipe_id'=>'4'],
        
        ['title'=>'Healthy chicken pasta bake','slug'=>'healthy-chicken-pasta-bake','description'=>'Try this healthy chicken pasta bake with peppers, courgette and ricotta for a nutritious midweek dinner. It’s sure to be a hit with everyone','lang'=>'en','recipe_id'=>'5'],
        ['title'=>'خبز باستا الدجاج الصحي','slug'=>'خبز-باستا-الدجاج-الصحي','description'=>'جرب معكرونة الدجاج الصحية المخبوزة بالفلفل والكوسة والريكوتا لعشاء منتصف الأسبوع المغذي. من المؤكد أنها ستحقق نجاحًا كبيرًا مع الجميع','lang'=>'ar','recipe_id'=>'5'],


        ['title'=>'Creamy mushroom & spinach pasta','slug'=>'creamy-mushroom-spinach-pasta','description'=>'Toss together tagliatelle, mushrooms and spinach in a parmesan and crème fraîche sauce to make a quick and low calorie dinner that takes just 25 minutes','lang'=>'en','recipe_id'=>'6'],
        ['title'=>'معكرونة بالسبانخ والفطر الكريمي','slug'=>'كريمة-فطر-سبانخ-باستا','description'=>'اخلطي التاغلياتيل والفطر والسبانخ معًا في صلصة البارميزان والكريمة الطازجة لإعداد عشاء سريع ومنخفض السعرات الحرارية يستغرق 25 دقيقة فقط','lang'=>'ar','recipe_id'=>'6'],

        


       ];
       DB::table('recipe_translations')->insert($translated_items);  

    }
}
