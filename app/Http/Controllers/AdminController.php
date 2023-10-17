<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function add_doctor(){
        return view('backend.admin.doctors.add_doctors');
    }
    public function post_doctor(Request $request){
        // dd($request->all());
        $data=new Doctor();
        $data->name=$request->doctor_name;
        $data->phone=$request->phone;
        $data->speciality=$request->speciality;
        $data->Room_no=$request->room_no;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = rand(1, 1000) . '_' . $data->name . '-' . $request->file('image')->getClientOriginalName();
            $file->move('uploads', $filename);
            $data->image= $filename;
        }
        $data->save();
        Alert::success('jjjjjjjjjjjjjj','Doctor adder successfully');
        return redirect()->back();
    }
}
