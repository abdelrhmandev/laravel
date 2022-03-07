<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use LaravelLocalization;
class Country extends Model
{
    protected $fillable = [
		'title_en',
		'title_ar',
		'code',
		'flag',
	];
	
	public $timestamps = false;
	
	public function city() {
		return $this->hasMany(City::class); 
	}

    // public function country_translation() {
	// 	return $this->hasMany(Country_translation::class); 
	// }
	// public function title() {
	// 	return $this->hasOne(Country::class)->pluck('title_en'); 
	// }

}
