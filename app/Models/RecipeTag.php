<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RecipeTag extends Model
{
 
    protected $table = 'recipe_tag';

 
        public function tag(){
            return $this->belongsToMany(Tag::class, 'recipe_tag', 'recipe_id', 'tag_id');
        }

 


}
