<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
class PageController extends Controller
{
    public function index()
    {
        if (view()->exists('admin.pages.index')) {
            return view('admin.pages.index');
        }

    }
        public function create()
    {
        if (view()->exists('admin.pages.create')) {
            return view('admin.pages.create');
        }

    }

    public function show()
    {
        if (view()->exists('admin.pages.index')) {
            return view('admin.pages.index');
        }

    }


    public function edit()
    {
        if (view()->exists('admin.pages.index')) {
            return view('admin.pages.index');
        }

    }


    public function destroy()
    {
        if (view()->exists('admin.pages.index')) {
            return view('admin.pages.index');
        }

    }




}
