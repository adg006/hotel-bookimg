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

    public function contact(){
        $contact_data = Page::where('name', 'contact')->first();
        return view('admin.auth.pages.contact', compact('contact_data'));
    }

    public function contact_update(Request $request) {
        $contact_data = Page::where('name', 'contact')->first();
        
        $contact_data->title = $request->title;
        $contact_data->content = $request->content;
        $contact_data->update();

        return redirect()->back()->with('success', 'Contact page updated successfully');
    }

    public function image(){
        $image_data = Page::where('name', 'image')->first();
        return view('admin.auth.pages.image', compact('image_data'));
    }

    public function image_update(Request $request) {
        $image_data = Page::where('name', 'image')->first();
        
        $image_data->title = $request->title;
        $image_data->update();

        return redirect()->back()->with('success', 'Image page updated successfully');
    }

    public function video(){
        $video_data = Page::where('name', 'video')->first();
        return view('admin.auth.pages.video', compact('video_data'));
    }

    public function video_update(Request $request) {
        $video_data = Page::where('name', 'video')->first();
        
        $video_data->title = $request->title;
        $video_data->update();

        return redirect()->back()->with('success', 'Video page updated successfully');
    }

    public function blog(){
        $blog_data = Page::where('name', 'blog')->first();
        return view('admin.auth.pages.blog', compact('blog_data'));
    }

    public function blog_update(Request $request) {
        $blog_data = Page::where('name', 'blog')->first();
        
        $blog_data->title = $request->title;
        $blog_data->update();

        return redirect()->back()->with('success', 'Blog page updated successfully');
    }

    public function faq(){
        $faq_data = Page::where('name', 'faq')->first();
        return view('admin.auth.pages.faq', compact('faq_data'));
    }

    public function faq_update(Request $request) {
        $faq_data = Page::where('name', 'faq')->first();
        
        $faq_data->title = $request->title;
        $faq_data->update();

        return redirect()->back()->with('success', 'FAQ page updated successfully');
    }
}
