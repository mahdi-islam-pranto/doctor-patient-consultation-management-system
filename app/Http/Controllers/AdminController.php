<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview() {
        return view ("admin.add_doctor");
    }

    public function upload(Request $request) {
        
        $doctor = new doctor;

        $image=$request->file;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->file->move('Doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->doctorName;
        $doctor->contact_number=$request->contactNumber;
        $doctor->spaciality=$request->specialization;
        $doctor->room=$request->roomNumber;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Sucessfully');

    }

    public function showappointment(){
        $data = appointment::all();
        return view("admin.showappointment",compact('data'));
    }

    public function approved($id)  {
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)  {
        $data = appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

}
