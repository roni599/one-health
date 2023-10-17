<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $data = Doctor::get();
                return view('frontend.users.home', compact('data'));
            } else {
                return view('backend.admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $data = Doctor::get();
            return view('frontend.users.home', compact('data'));
        }
    }
    public function appoinment(Request $request)
    {
        if (Auth::id()) {
            $data = new Appoinment();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->doctor = $request->doctor;
            $data->date = $request->date;
            $data->message = $request->message;
            $data->status = 'in progressing';
            if (Auth::id()) {
                $data->user_id = Auth::user()->id;
            }
            $data->save();
            return redirect()->back()->with('success', 'Form submitted successfully!');
        }
        else{
            return redirect('login');
        }
    }
}
