<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Video;

class VideoController extends Controller
{
    public function view()
    {
        $video_data = Video::all();
        return view('admin.auth.video.view', compact('video_data'));
    }

    public function add()
    {
        return view('admin.auth.video.add');
    }

    public function store(Request $request)
    {
        $video_data = new Video();

        $request->validate([
            'video_id' => 'required',
            'description' => 'required'
        ]);

        $video_data->video_id = $request->video_id;
        $video_data->description = $request->description;

        $video_data->save();

        return redirect()->back()->with('success', 'Video created successfully');
    }

    public function edit($id)
    {
        $video_data = Video::where('id', $id)->first();
        return view('admin.auth.video.edit', compact('video_data'));
    }

    public function update(Request $request, $id)
    {
        $video_data = Video::where('id', $id)->first();

        $video_data->video_id = $request->video_id;
        $video_data->description = $request->description;

        $video_data->update();

        return redirect()->back()->with('success', 'Video updated successfully');
    }

    public function delete($id)
    {
        $video_data = Video::where('id', $id)->first();
        $video_data->delete();

        return redirect()->back()->with('success', 'Video deleted successfully');
    }
}
