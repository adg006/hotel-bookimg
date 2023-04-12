<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Page;

class AboutController extends Controller
{
    public function about(){
        $about_data = Page::where('name', 'about')->first();
        return view('frontend.about', compact('about_data'));
    }
}
