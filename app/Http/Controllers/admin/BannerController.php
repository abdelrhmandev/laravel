<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        return view('admin.tags.index');
    }
        public function create()
    {
        return view('admin.tags.create');
    }
}
