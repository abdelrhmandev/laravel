<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Recipe extends Model
{
    protected $table = 'recipes';

    protected $with = [
        'recipe',
      
    ];

    protected $fillable = [
		'recipe_category_id',
	];
    public function recipe_translation(){
        return $this->hasMany(RecipeTranslation::class);
    }
    # Translation method
    public function recipe(){
        return $this->hasOne(RecipeTranslation::class)->where('lang',app()->getLocale());
    }

    public function recipe_category(){
        return $this->belongsTo(RecipeCategory::class);
    }

    public function likes(){
        return $this->hasMany(RecipeLike::class);
    }
    public function dislikes(){
        return $this->hasMany(RecipeLike::class)->where('likes','0');
    }

    public function reviews(){
        return $this->hasMany(RecipeReview::class);
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class, 'recipe_tag', 'recipe_id', 'tag_id')->withPivot('tag_id');

    }

    

    
    public function users_likes(){
        return $this->belongsToMany(User::class, 'recipe_likes', 'recipe_id', 'user_id');
        }

}
