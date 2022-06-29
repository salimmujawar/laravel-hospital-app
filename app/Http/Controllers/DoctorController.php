<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    function add_view() {
        return view('admin.add_doctor');
    }

    function post(Request $request) {
        $doctor = new Doctor(); 

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room; 
        
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('doctorimage', $imageName);       
            $doctor->image = $imageName;
        }

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully!');
    }
}
