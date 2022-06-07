<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Tag extends Model
{
    protected $fillable = [
	];
    public function tag_translation(){
        return $this->hasMany(TagTranslation::class);
    }
    # Translation method
    public function tag(){
        return $this->hasOne(TagTranslation::class)->where('lang',app()->getLocale());
    }

}
