<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Page;

class PagesController extends Controller
{
    public function about() {
        $about_data = Page::where('name', 'about')->first();
        return view('admin.auth.pages.about', compact('about_data'));
    }

    public function about_update(Request $request) {
        $about_data = Page::where('name', 'about')->first();
        
        $about_data->title = $request->title;
        $about_data->content = $request->content;
        $about_data->update();

        return redirect()->back()->with('success', 'About page updated successfully');
    }

    public function tnc(){
        $tnc_data = Page::where('name', 'tnc')->first();
        return view('admin.auth.pages.tnc', compact('tnc_data'));
    }

    public function tnc_update(Request $request) {
        $tnc_data = Page::where('name', 'tnc')->first();
        
        $tnc_data->title = $request->title;
        $tnc_data->content = $request->content;
        $tnc_data->update();

        return redirect()->back()->with('success', 'Terms and conditions page updated successfully');
    }

    public function privacy(){
        $privacy_data = Page::where('name', 'privacy')->first();
        return view('admin.auth.pages.privacy', compact('privacy_data'));
    }

    public function privacy_update(Request $request) {
        $privacy_data = Page::where('name', 'privacy')->first();
        
        $privacy_data->title = $request->title;
        $privacy_data->content = $request->content;
        $privacy_data->update();

        return redirect()->back()->with('success', 'Privacy policy page updated successfully');
    }
}
