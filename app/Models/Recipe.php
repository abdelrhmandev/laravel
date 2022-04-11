<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Recipe extends Model
{
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

    public function category(){
        return $this->belongsTo(RecipeCategory::class,'id','recipe_category_id');
    }

}
