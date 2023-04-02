<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Slider;
use App\Models\Admin\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $slider_data = Slider::all();
        $feature_data = Feature::all();
        return view('frontend.home', compact('slider_data', 'feature_data'));
    }
}
