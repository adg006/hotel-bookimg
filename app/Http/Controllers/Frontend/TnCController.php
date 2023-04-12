<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TnCController extends Controller
{
    public function tnc(){
        $tnc_data = Page::where('name', 'tnc')->first();
        return view('frontend.tnc', compact('tnc_data'));
    }
}
