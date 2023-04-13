<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqsController extends Controller
{
    public function faq()
    {
        $faq_data = Faq::all();
        $faq_title = Page::where('name', 'faq')->first();
        return view('frontend.faq', compact('faq_data', 'faq_title'));
    }
}
