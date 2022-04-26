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

 


}
