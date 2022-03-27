<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }
        public function create()
    {
        return view('admin.posts.create');
    }


    
			public function store(Request $request){
                $post = new Post;
                $post->title = $request->title;
                $post->description = $request->description;
                $post->save();
                $tags = $request->tag;
                $tagNames = [];        
                if (!empty($tags)) {
                    foreach ($tags as $tagName)
                    {
                        $tag = Tag::firstOrCreate(['name'=>$tagName, 'slug'=>Str::slug($tagName)]);                
                        if($tag)
                        {
                            $tagNames[] = $tag->id;
                        }
                    }
                    $post->tags()->syncWithoutDetaching($tagNames);
                }
                return redirect()->route('posts')->with('success','Post created successfully');;
            }
}
