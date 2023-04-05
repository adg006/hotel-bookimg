<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Image;

class ImageController extends Controller
{
    public function view()
    {
        $image_data = Image::all();
        return view('admin.auth.image.view', compact('image_data'));
    }

    public function add()
    {
        return view('admin.auth.image.add');
    }

    public function store(Request $request)
    {
        $image_data = new Image();

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,svg,gif',
            'description' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time() . '.' . $ext;

        $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
        $image_data->photo = $final_name;

        $image_data->description = $request->description;

        $image_data->save();

        return redirect()->back()->with('success', 'Image added successfully');
    }

    public function edit($id)
    {
        $image_data = Image::where('id', $id)->first();
        return view('admin.auth.image.edit', compact('image_data'));
    }

    public function update(Request $request, $id)
    {
        $image_data = Image::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,svg,gif'
            ]);

            unlink(public_path('/admin/uploads/' . $image_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = time() . '.' . $ext;

            $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
            $image_data->photo = $final_name;
        }

        $image_data->description = $request->description;
        $image_data->update();

        return redirect()->back()->with('success', 'Image updated successfully');
    }

    public function delete($id)
    {
        $image_data = Image::where('id', $id)->first();
        unlink(public_path('/admin/uploads/' . $image_data->photo));
        $image_data->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }
}
