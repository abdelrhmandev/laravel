<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Recipe;
use App\Models\RecipeCategory;


class ReviewController extends Controller
{
    public function index($id){ 
        dd($id);
    }

}
