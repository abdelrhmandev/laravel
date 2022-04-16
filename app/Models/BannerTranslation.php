<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerTranslation extends Model
{
    protected $table = 'banner_translations';

    protected $fillable = [
		'banner_id',
		'title',
        'slug',
		'lang',
	];

    public function banner(){
        return $this->belongsTo(banner::class);
    }

}
