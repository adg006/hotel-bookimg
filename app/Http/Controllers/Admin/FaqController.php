<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Faq;

class FaqController extends Controller
{
    public function view()
    {
        $faq_data = Faq::all();
        return view('admin.auth.faq.view', compact('faq_data'));
    }

    public function add()
    {
        return view('admin.auth.faq.add');
    }

    public function store(Request $request)
    {
        $faq_data = new Faq();

        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq_data->question = $request->question;
        $faq_data->answer = $request->answer;

        $faq_data->save();

        return redirect()->back()->with('success', 'FAQ added successfully');
    }

    public function edit($id)
    {
        $faq_data = Faq::where('id', $id)->first();
        return view('admin.auth.faq.edit', compact('faq_data'));
    }

    public function update(Request $request, $id)
    {
        $faq_data = Faq::where('id', $id)->first();

        $faq_data->question = $request->question;
        $faq_data->answer = $request->answer;
        $faq_data->update();

        return redirect()->back()->with('success', 'FAQ updated successfully');
    }

    public function delete($id)
    {
        $faq_data = Faq::where('id', $id)->first();
        $faq_data->delete();

        return redirect()->back()->with('success', 'FAQ deleted successfully');
    }
}
