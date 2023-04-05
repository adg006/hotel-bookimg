<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Image;
use App\Models\Admin\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function photo()
    {
        $image_data = Image::paginate(4);
        return view('frontend.photo', compact('image_data'));
    }

    public function video()
    {
        $video_data = Video::all();
        return view('frontend.video', compact('video_data'));
    }
}
