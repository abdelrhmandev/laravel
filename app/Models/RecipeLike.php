<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RecipeLike extends Model
{
 
    protected $table = 'recipe_likes';

 
    public function recipes(){
        return $this->belongsTo(Recipe::class);
    }
    public function likes(){
        return $this->belongsToMany(User::class);
    }


    public function uuusulikes()
			{
                return $this->belongsToMany('App\Models\RecipeLike', 'recipe_likes', 'recipe_id', 'user_id');

			}


}
