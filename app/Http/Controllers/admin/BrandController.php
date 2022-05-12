<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Recipe;
use App\Models\RecipeCategory;


class BrandController extends Controller
{
    // public function index(){ 
    //     if (view()->exists('admin.recipes.index')) {
    //         $recipes = Recipe::with('recipe','recipe_category.category')->latest()->get(); 
    //         return view('admin.recipes.index',['recipes'=>$recipes]);
    //     }
    // }


}
