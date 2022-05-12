<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subrcription;
class SubscriptionController extends Controller
{
    public function index(){ 
        if (view()->exists('admin.subrcriptions.index')) {
            $subrcriptions = Subrcription::get(); 
            return view('admin.subrcriptions.index',['subrcriptions'=>$subrcriptions]);
        }
    }
        public function create()
    {
        return view('admin.subrcriptions.create');
    }
}
