<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class DoctorController extends Controller
{
    public function add()
    {
        $categories = Category::all();
        return view('admin.doctor.create', compact('categories'));
    }



    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->name = $request->name;
        $doctor->department = $request->department;
        $doctor->description = $request->description;
        $doctor->phone = $request->phone;


        if ($imagee = $request->file('image')) {
            $destinationPath = 'storage/aboutimg/';
            $profileImage = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $profileImage);
            $doctor['image'] = "$profileImage";
        }
        $doctor->save();
        Toastr::success('Doctor Added', 'Success!', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctor.index', compact('doctors'));
    }
    public function edit($id)
    {
        $doctors  = Doctor::find($id);
        $categories = Category::all();
        return view('admin.doctor.edit', compact('doctors', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->description = $request->description;
        $doctor->department = $request->department;



        if ($imagee = $request->file('image')) {
            $destinationPath = 'storage/aboutimg/';
            $profileImage = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $profileImage);
            $doctor['image'] = "$profileImage";
        } else {
            unset($doctor['image']);
        }

        $doctor->save();
        Toastr::success('Doctor information Updated', 'Success!', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        Toastr::warning('Doctor Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
