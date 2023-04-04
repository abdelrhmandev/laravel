<?php

namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
class FaqController extends Controller
{

    protected $model;
    protected $resource;
    protected $trans_file;

    public function __construct(Faq $model){
        $this->model = $model;
        $this->resource = 'recipes';
        $this->trans_file = 'recipe';
    }


    
    public function index()
    {
        dd('here');
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
