<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategoryTranslation extends Model
{
    protected $table = 'recipe_categories_translations';

    protected $fillable = [
		'recipe_category_id',
		'title',
        'slug',
		'lang',
	];

    public function recipe_category(){
        return $this->belongsTo(RecipeCategory::class);
    }

}
