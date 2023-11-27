<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
 
    protected $table = 'clients';
    protected $fillable = [
		'title','image','link'
	];    
    protected $guarded = ['id'];
 
}
