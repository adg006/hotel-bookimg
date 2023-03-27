<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('admin.auth.dashboard');
    }

    public function profile()
    {
        $profile_data = Auth::guard('admin')->user();
        return view('admin.auth.profile', compact('profile_data'));
    }

    public function profile_submit(Request $request)
    {
        $profile_data = Admin::where('email', Auth::guard('admin')->user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        if ($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);

            $profile_data->password = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,svg,gif'
            ]);

            unlink(public_path('/admin/uploads/' . $profile_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'admin' . '.' . $ext;

            $request->file('photo')->move(public_path('/admin/uploads/'), $final_name);
            $profile_data->photo = $final_name;
        }

        $profile_data->name = $request->name;
        $profile_data->email = $request->email;

        $profile_data->update();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
