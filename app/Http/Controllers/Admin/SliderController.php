<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Slider;

class SliderController extends Controller
{
    public function view() {
        $slider_data = Slider::all();
        return view('admin.auth.slider.view', compact('slider_data'));
    }
}
