<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Image;
use App\Models\Admin\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Page;

class GalleryController extends Controller
{
    public function photo()
    {
        $image_data = Image::paginate(4);
        $image_title = Page::where('name', 'image')->first();
        return view('frontend.photo', compact('image_data', 'image_title'));
    }

    public function video()
    {
        $video_data = Video::all();
        $video_title = Page::where('name', 'video')->first();
        return view('frontend.video', compact('video_data', 'video_title'));
    }
}
