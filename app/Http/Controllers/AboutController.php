<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class AboutController extends Controller
{
    public function showabout(){
        $about = About::first();
        return view('user.about',compact('about'));
       }

       // admin //
       public function create(){
        return view('admin.about.create');
       }

       public function store(Request $request){
            $about  = new About();
            $about->title = $request->title; 
            $about->description = $request->description; 
            $about->save();

            Toastr::success('About Content Stored', 'Success!', ["positionClass" => "toast-top-right"]);
            return redirect()->back();


       }

       public function index(){
        $abouts = About::all(); 
        return view('admin.about.index',compact('abouts'));

       }

       public function edit($id){
        $abouts = About::find($id); 
        return view('admin.about.edit',compact('abouts'));
        
       }
       public function update(Request $request, $id){

            $abouts = About::find($id);
            $abouts->title = $request->title;
            $abouts->description = $request->description;
            $abouts->save();

            Toastr::success('About Content Updated', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();

       }

       public function destroy($id){
        $about = About::find($id);
        $about->delete();
        Toastr::warning('About Content Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
       }


     
}
