<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
class CareerController extends Controller
{

    protected $model;
    protected $resource;
    protected $trans_file;

    public function __construct(Recipe $model){
        $this->model = $model;
        $this->resource = 'recipes';
        $this->trans_file = 'recipe';
    }


    
    public function index()
    {
        if (view()->exists('admin.faqs.index')) {
            $faqs = Faq::with('faq')->latest()->get(); 
            return view('admin.faqs.index',['faqs'=>$faqs]);
        }
    }
        public function create()
    {
        return view('admin.faqs.create');
    }
}