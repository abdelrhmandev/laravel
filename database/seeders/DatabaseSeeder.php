<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            AreaSeeder::class,
            DistrictSeeder::class,
            SlideSeeder::class,   
            TagSeeder::class,
            PostSeeder::class,
            PostCategorySeeder::class,
            RecipeCategorySeeder::class,
            RecipeSeeder::class,
            RecipeReviewSeeder::class,
            RecipeTagSeeder::class,
            RecipelikeSeeder::class,
            FaqSeeder::class,
            CopounSeeder::class,
            SettingSeeder::class,
            NutritionSeeder::class,
            RecipeNutrationSeeder::class,
            LanguageSeeder::class,
        ]); 
    }
}
