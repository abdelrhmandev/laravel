<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\RecipeCategory;


class RecipeCategoryController extends Controller
{
    public function index(){ 
        if (view()->exists('admin.recipe_categories.index')) {
            $recipe_categories = RecipeCategory::with(['category','recipes'])->get(); 
            return view('admin.recipe_categories.index',['recipe_categories'=>$recipe_categories]);
        }
    }
        public function create(){
        if (view()->exists('admin.recipe_categories.create')) {
            return view('admin.recipe_categories.create');
        }
    }
     public function edit(){
        if (view()->exists('admin.recipe_categories.index')) {
            return view('admin.recipe_categories.edit');
        }
    }


    public function destroy(){
        dd('delete');
    }


    public function multi_delete(){
        dd('multi_delete');
    }


}
