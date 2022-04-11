<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeTranslation extends Model
{
    protected $table = 'recipe_translations';

    protected $fillable = [
		'recipe_id',
		'title',
        'slug',
		'lang',
	];

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

}
