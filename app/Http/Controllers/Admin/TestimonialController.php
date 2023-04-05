<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Testimonial;

class TestimonialController extends Controller
{
    public function view()
    {
        $testimonial_data = Testimonial::all();
        return view('admin.auth.testimonial.view', compact('testimonial_data'));
    }

    public function add()
    {
        return view('admin.auth.testimonial.add');
    }

    public function store(Request $request)
    {
        $testimonial_data = new Testimonial();

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,svg,gif',
            'name' => 'required',
            'designation' => 'required',
            'testimonial' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time() . '.' . $ext;

        $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
        $testimonial_data->photo = $final_name;


        $testimonial_data->name = $request->name;
        $testimonial_data->designation = $request->designation;
        $testimonial_data->testimonial = $request->testimonial;

        $testimonial_data->save();

        return redirect()->back()->with('success', 'Testimonial added successfully');
    }

    public function edit($id)
    {
        $testimonial_data = Testimonial::where('id', $id)->first();
        return view('admin.auth.testimonial.edit', compact('testimonial_data'));
    }

    public function update(Request $request, $id)
    {
        $testimonial_data = Testimonial::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,svg,gif'
            ]);

            unlink(public_path('/admin/uploads/' . $testimonial_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = time() . '.' . $ext;

            $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
            $testimonial_data->photo = $final_name;
        }

        $testimonial_data->name = $request->name;
        $testimonial_data->designation = $request->designation;
        $testimonial_data->testimonial = $request->testimonial;

        $testimonial_data->update();

        return redirect()->back()->with('success', 'Testimonial updated successfully');
    }

    public function delete($id)
    {
        $testimonial_data = Testimonial::where('id', $id)->first();
        unlink(public_path('/admin/uploads/' . $testimonial_data->photo));
        $testimonial_data->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully');
    }
}
