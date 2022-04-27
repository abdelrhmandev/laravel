<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Bannerontroller extends Controller
{
    public function index()
    {
        return view('admin.banners.index');
    }
        public function create()
    {
        return view('admin.banners.create');
    }
}
