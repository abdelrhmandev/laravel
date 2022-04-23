<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Recipe extends Model
{
    protected $table = 'recipes';

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
    public function reviews(){
        return $this->hasMany(RecipeReview::class);
    }
    public function tags(){
    return $this->belongsToMany('App\Models\Tag', 'recipe_tag', 'recipe_id', 'tag_id');
    }
    


}
