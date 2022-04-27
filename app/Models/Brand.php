<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
		// 'recipe_category_id',
	];
    public function banner_translation(){
        return $this->hasMany(RecipeTranslation::class);
    }
    # Translation method
    public function banner(){
        return $this->hasOne(RecipeTranslation::class)->where('lang',app()->getLocale());
    }

}
