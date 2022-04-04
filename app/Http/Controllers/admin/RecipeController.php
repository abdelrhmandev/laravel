<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index(){ 
        if (view()->exists('admin.recipes.index')) {
            $recipes = Recipe::with(['district_info','area.area_info','area.city.city_info','area.city.country'])->get(); 
            return view('admin.recipes.index',['recipes'=>$recipes]);
        }
    }
        public function create(){
        if (view()->exists('admin.recipes.create')) {
            return view('admin.recipes.create');
        }
    }
     public function edit(){
        if (view()->exists('admin.recipes.index')) {
            return view('admin.recipes.edit');
        }
    }


    public function destroy(){
        dd('delete');
    }


    public function multi_delete(){
        dd('multi_delete');
    }


}
