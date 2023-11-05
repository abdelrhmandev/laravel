<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{



    protected $table = 'posts';

    protected $fillable = ['status','featured','allow_comments','image','user_id'];

    protected $with = ['translate'];

    protected $guarded = ['id'];

    public function scopeStatus($query, $type){
        return $query->where('status', $type);
    }

     public function categories(){
        return $this->belongsToMany(Category::class,'post_category');
    }

 
 


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function media(){
        return $this->hasMany(PostMedia::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function translate($lang = null)
    {
        if ($lang == 'getAll') {
            return $this->hasMany(PostTranslation::class);
        } else {
            return $this->hasOne(PostTranslation::class)->where('lang', app()->getLocale());
        }
    }

 
}
