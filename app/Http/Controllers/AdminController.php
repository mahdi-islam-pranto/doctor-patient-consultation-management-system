<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview() {
        return view ("admin.add_doctor");
    }

    public function upload(Request $request) {
        
        $doctor = new doctor;

        $image=$request->file;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->file->move('image',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->doctorName;
        $doctor->contact_number=$request->contactNumber;
        $doctor->spaciality=$request->specialization;
        $doctor->room=$request->roomNumber;
        $doctor->save();
        return redirect()->back();

    }
}
