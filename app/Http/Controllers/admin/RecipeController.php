<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Recipe;
 


class RecipeController extends Controller
{
    public function index(Request $request){ 


      

        if (view()->exists('admin.recipes.index')) {
          
//https://omarbarbosa.com/posts/optimization-of-eloquent-queries-to-reduce-memory-usage
# Right
            // $posts = Post::with([
            //     'tags' => function($query) {
            //         $query->select('id', 'name'); # Many to many
            //     }, 
            //     'images' => function($query) {
            //         $query->select('id', 'url', 'post_id'); # One to many
            //     }, 
            //     'user' => function($query) {
            //         $query->select('id', 'name'); # One to many
            //     }
            // ])
            // ->get(['id', 'title', 'content', 'user_id']);
 
            $recipes = Recipe::select('id','image')->get(); 

            
            // $recipes = Recipe::with(['recipe','recipe_category.category','tags.tag'])->withCount('likes','dislikes','reviews')->latest()->get(); 

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

            // طريقه كتابه جديده
            // return view('question-list', [
            //     'questions' => Question::with('source', 'type')->paginate(100)
            // ]);

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
