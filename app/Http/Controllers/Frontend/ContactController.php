<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact(){
        $contact_data = Page::where('name', 'contact')->first();
        return view('frontend.contact', compact('contact_data'));
    }
}
