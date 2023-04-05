<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function view()
    {
        $post_data = Post::all();
        return view('admin.auth.post.view', compact('post_data'));
    }

    public function add()
    {
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

    public function edit($id)
    {
        $post_data = Post::where('id', $id)->first();
        return view('admin.auth.post.edit', compact('post_data'));
    }

    public function update(Request $request, $id)
    {
        $post_data = Post::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,svg,gif'
            ]);

            unlink(public_path('/admin/uploads/' . $post_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = time() . '.' . $ext;

            $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
            $post_data->photo = $final_name;
        }

        $post_data->title = $request->title;
        $post_data->short_content = $request->short_content;
        $post_data->long_content = $request->long_content;

        $post_data->update();

        return redirect()->back()->with('success', 'Post updated successfully');
    }

    public function delete($id)
    {
        $post_data = Post::where('id', $id)->first();
        unlink(public_path('/admin/uploads/' . $post_data->photo));
        $post_data->delete();

        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}
