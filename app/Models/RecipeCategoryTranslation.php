<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategoryTranslation extends Model
{
    protected $table = 'recipe_categories_translations';

    protected $fillable = [
 
		'title',
        'slug',
		'lang',
	];

   

}
