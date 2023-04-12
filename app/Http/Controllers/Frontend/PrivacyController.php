<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    public function privacy(){
        $privacy_data = Page::where('name', 'privacy')->first();
        return view('frontend.privacy', compact('privacy_data'));
    }
}
