<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
		// 'recipe_category_id',
	];
    public function page_translation(){
        return $this->hasMany(PageTranslation::class);
    }
    # Translation method
    public function page(){
        return $this->hasOne(PageTranslation::class)->where('lang',app()->getLocale());
    }

}
