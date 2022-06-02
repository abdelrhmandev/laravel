<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Recipe;
 


class RecipeController extends Controller
{
    public function index(Request $request){ 


        echo $request->tag_id;

        if (view()->exists('admin.recipes.index')) {
            $recipes = Recipe::with(['recipe','recipe_category.category'])->withCount('likes','dislikes','reviews')->latest()->get(); 


            

            // $posts = Post::whereHas('comments', function (Builder $query) {
            //     $query->where('content', 'like', 'code%');
            // }, '>=', 10)->get();

            // $posts = Post::withCount([
            //     'comments',             
            //     'comments as active_comments' => function (Builder $query) {            
            //         $query->where('approved', 1);            
            //     }            
            // ])->get();

            
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

    public function reviews(){
        if (view()->exists('admin.recipes.reviews.index')) {
            return view('admin.recipes.reviews.index');
        }
    }


    public function destroy(){
        dd('delete');
    }


    public function multi_delete(){
        dd('multi_delete');
    }


}
