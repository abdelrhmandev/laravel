<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RecipeTag extends Pivot
{
 
    protected $table = 'recipe_tag';

 
        public function tag(){
            return $this->belongsToMany(Tag::class);
        }

 


}
