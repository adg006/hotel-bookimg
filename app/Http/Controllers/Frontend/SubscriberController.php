<?php

namespace App\Http\Controllers\Frontend;

use Validator;
use App\Mail\WebsiteMail;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Models\Admin\Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function email(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if (!$validator->passes()) {
            return response()->json([
                'code' => 0,
                'error_message' => $validator->errors()->toArray()
            ]);
        } else {
            $token = hash('sha256', time());
            $obj = new Subscriber();
            $obj->email = $request->email;
            $obj->token = $token;
            $obj->status = 0;
            $obj->save();

            $verification_link = url('subscriber/verify/' . $request->email . '/' . $token);

            $subject = 'Subscriber verification';
            $message = 'Please click on the link below to confirm verification <br/><br/>';
            $message .= '<a href="' . $verification_link . '">';
            $message .= $verification_link;
            $message .= '</a><br/>';

            Mail::to($request->email)->send(new WebsiteMail($subject, $message));

            return response()->json([
                'code' => 1,
                'success_message' => 'Please check your email for confirm subscription.'
            ]);
        }
    }
}
