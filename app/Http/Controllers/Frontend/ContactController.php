<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\WebsiteMail;
use App\Models\Admin\Page;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    public function contact(){
        $contact_data = Page::where('name', 'contact')->first();
        return view('frontend.contact', compact('contact_data'));
    }

    public function email(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if(!$validator->passes()){
            return response()->json([
                'code' => 0,
                'error_message' => $validator->errors()->toArray()
            ]);
        } else {
            $subject = 'Contact form submission';
            $message = 'Visitor email information: <br/><br/>';
            $message.= 'Name: ' . $request->name . '<br/>';
            $message.= 'Email: ' . $request->email . '<br/>';
            $message.= 'Message: ' . $request->message . '<br/>';

            $admin_data = Admin::where('id', 1)->first();
            $admin_email = $admin_data->email;

            Mail::to($admin_email)->send(new WebsiteMail($subject, $message));

            return response()->json([
                'code' => 1,
                'success_message' => 'Email is send successfully'
            ]);
        }
    }
}
