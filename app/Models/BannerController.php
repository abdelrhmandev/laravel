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

}
