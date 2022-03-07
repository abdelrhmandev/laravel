<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Area extends Model
{
    protected $fillable = [
		'city_id',
	];
    public function area_translation(){
        return $this->hasMany(AreaTranslation::class);
    }
    # Translation method
    public function area_info(){
        return $this->hasOne(AreaTranslation::class)->where('lang',app()->getLocale());
    }
       public function city() {
		return $this->belongsTo(City::class);
	}

}
