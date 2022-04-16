<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RecipeCategory extends Model
{
 
    protected $table = 'recipe_categories';

    
    
    public function recipe_category_translation(){
        return $this->hasMany(RecipeCategoryTranslation::class);
    }
    # Translation method
    public function category(){
        return $this->hasOne(RecipeCategoryTranslation::class)->where('lang',app()->getLocale());
    }
    public function recipes(){
        return $this->hasMany(Recipe::class);
    }
}
