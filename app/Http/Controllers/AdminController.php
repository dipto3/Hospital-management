<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
class AdminController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function showappointment(){
        
       
        $appointments = Appointment::orderBy('id', 'desc')->get();
        return view('admin.appointment.all_appointment',compact('appointments'));
    }

    public function approved($id){
        $appointment =Appointment ::find($id);
        $appointment->status = 'Approved';
      
        $appointment->save();
        Toastr::success('Approved', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function cancelled($id){
        $appointment =Appointment ::find($id);
        $appointment->status = 'Cancelled';
      
        $appointment->save();
        Toastr::warning('Cancelled', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    
}
