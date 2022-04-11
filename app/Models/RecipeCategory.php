<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RecipeCategory extends Model
{
 
    public function recipe_category_translation(){
        return $this->hasMany(RecipeCategoryTranslation::class);
    }
    # Translation method
    public function category(){
        return $this->hasOne(RecipeCategoryTranslation::class)->where('lang',app()->getLocale());
    }
    public function recipe(){
        return $this->hasMany(Recipe::class,'recipe_category_id','id');
    }
}
