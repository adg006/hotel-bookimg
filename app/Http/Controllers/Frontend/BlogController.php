<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Page;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog()
    {
        $post_data = Post::orderBy('id', 'desc')->paginate(3);
        $post_title = Page::where('name', 'blog')->first();
        return view('frontend.blog', compact('post_data', 'post_title'));
    }

    public function blog_detail($id)
    {
        $post_data = Post::where('id', $id)->first();
        $post_data->total_view++;
        $post_data->update();
        return view('frontend.blog-detail', compact('post_data'));
    }
}
