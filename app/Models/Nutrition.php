<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Nutrition extends Model
{
    protected $fillable = [
	];
    public function nutrition_translation(){
        return $this->hasMany(NutritionTranslation::class);
    }
    # Translation method
    public function nutrition(){
        return $this->hasOne(NutritionTranslation::class)->where('lang',app()->getLocale());
    }

 

}
