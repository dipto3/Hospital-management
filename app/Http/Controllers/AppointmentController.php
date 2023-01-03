<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;


class AppointmentController extends Controller
{
    public function appointment(Request $request){
        
       $data = new Appointment;
        // $data = User::findOrFail($data->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';
        $data->user_id = Session::get('id'); 

        // if($request->session()->has('id')){
        //     $data->user_id = $request->session()->get('id');
        // }   --- it also work
       
        $data->save();
        Toastr::success('Appointment Processing', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();

    }

   public function cancel_appointment($id){
    $appointment = Appointment::find($id);
    $appointment->delete();
    Toastr::warning('Appointment Removed', '', ["positionClass" => "toast-top-right"]);
    return redirect()->back();
   }
}
