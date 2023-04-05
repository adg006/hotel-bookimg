<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Faq;

class FaqsController extends Controller
{
    public function faq()
    {
        $faq_data = Faq::all();
        return view('frontend.faq', compact('faq_data'));
    }
}
