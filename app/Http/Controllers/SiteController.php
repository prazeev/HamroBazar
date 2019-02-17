<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $data['categories'] = Category::all();
        return view('site.welcome')->with($data);
    }
}
