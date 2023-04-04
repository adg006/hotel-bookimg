<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function view() {
        $post_data = Post::all();
        return view('admin.auth.post.view', compact('post_data'));
    }

    public function add() {
        return view('admin.auth.post.add');
    }
    
    public function store(Request $request)
    {   
        $post_data = new Post();

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,svg,gif',
            'title' => 'required',
            'short_content' => 'required',
            'long_content' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time() . '.' . $ext;

        $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
        $post_data->photo = $final_name;


        $post_data->title = $request->title;
        $post_data->short_content = $request->short_content;
        $post_data->long_content = $request->long_content;
        $post_data->total_view = 1;

        $post_data->save();

        return redirect()->back()->with('success', 'Post created successfully');
    }

    public function edit($id) {
        // $slider_data = Slider::where('id', $id)->first();
        // return view('admin.auth.slider.edit', compact('slider_data'));
    }

    public function update(Request $request, $id) {
        // $slider_data = Slider::where('id', $id)->first();

        // if ($request->hasFile('photo')) {
        //     $request->validate([
        //         'photo' => 'image|mimes:jpg,jpeg,png,svg,gif'
        //     ]);

        //     unlink(public_path('/admin/uploads/' . $slider_data->photo));

        //     $ext = $request->file('photo')->extension();
        //     $final_name = time() . '.' . $ext;

        //     $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
        //     $slider_data->photo = $final_name;
        // }

        // $slider_data->heading = $request->heading;
        // $slider_data->sub_heading = $request->sub_heading;
        // $slider_data->button_text = $request->button_text;
        // $slider_data->button_url = $request->button_url;

        // $slider_data->update();

        // return redirect()->back()->with('success', 'Slider updated successfully');     
    }

    public function delete($id) {
        // $slider_data = Slider::where('id', $id)->first();
        // unlink(public_path('/admin/uploads/' . $slider_data->photo));
        // $slider_data->delete();

        // return redirect()->back()->with('success', 'Slider deleted successfully');    
    }
}
