<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RecipeReview extends Model
{
 
    protected $table = 'recipe_reviews';

 
    public function reviews(){
        return $this->belongsTo(Recipe::class);
    }
    
}
