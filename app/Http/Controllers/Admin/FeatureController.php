<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Feature;

class FeatureController extends Controller
{
    public function view()
    {
        $feature_data = Feature::all();
        return view('admin.auth.feature.view', compact('feature_data'));
    }

    public function add()
    {
        return view('admin.auth.feature.add');
    }

    public function store(Request $request)
    {
        $feature_data = new Feature();

        $request->validate([
            'feature_icon' => 'required',
            'feature_title' => 'required',
            'feature_description' => 'required'
        ]);

        $feature_data->feature_icon = $request->feature_icon;
        $feature_data->feature_title = $request->feature_title;
        $feature_data->feature_description = $request->feature_description;
        $feature_data->save();

        return redirect()->back()->with('success', 'Features added successfully');
    }

    public function edit($id)
    {
        $feature_data = Feature::where('id', $id)->first();
        return view('admin.auth.feature.edit', compact('feature_data'));
    }

    public function update(Request $request, $id)
    {
        $feature_data = Feature::where('id', $id)->first();

        $request->validate([
            'feature_icon' => 'required',
            'feature_title' => 'required',
            'feature_description' => 'required'
        ]);

        $feature_data->feature_icon = $request->feature_icon;
        $feature_data->feature_title = $request->feature_title;
        $feature_data->feature_description = $request->feature_description;
        $feature_data->update();

        return redirect()->back()->with('success', 'Features updated successfully');
    }

    public function delete($id)
    {
        $feature_data = Feature::where('id', $id)->first();
        $feature_data->delete();
    }
}
