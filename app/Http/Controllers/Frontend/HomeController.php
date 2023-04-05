<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Slider;
use App\Models\Admin\Feature;
use App\Models\Admin\Testimonial;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $slider_data = Slider::all();
        $feature_data = Feature::all();
        $testimonial_data = Testimonial::all();
        $post_data = Post::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.home', compact('slider_data', 'feature_data', 'testimonial_data', 'post_data'));
    }
}
