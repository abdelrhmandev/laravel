<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Faq extends Model
{
    protected $table = 'faqs';

 
    public function faq_translation(){
        return $this->hasMany(FaqTranslation::class);
    }
    # Translation method
    public function faq(){
        return $this->hasOne(FaqTranslation::class)->where('lang',app()->getLocale());
    }
}
