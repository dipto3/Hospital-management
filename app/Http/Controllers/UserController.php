<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\News;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Brian2694\Toastr\Facades\Toastr;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class UserController extends Controller

{
    public function login(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }

    public function registration(Request $request)
    {
         
       
 
        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
 
        $user->save();
        Toastr::success('Account Created', 'Success!', ["positionClass" => "toast-top-right"]);
        return redirect('/register')->with('message','Account created!');;
 
    }

    public function home(){
        $doctors = Doctor::all();
        $newss = News::all();
        return view('user.home',compact('doctors','newss'));
    }

    public function dashboard(){
        return view('admin.home');
    }
    public function logincheck(Request $request){
        $email=$request->email;
        $password=$request->password;
    $result=User::where('email',$email)->where('password',$password)->first();
       
        if($result){
            session(['login' => 'true']);
            Session::put('usertype', $result->usertype);
            Session::put('name', $result->name);
            Session::put('email', $result->email);
            Session::put('phone', $result->phone);
            Session::put('id', $result->id);
            if( $result->usertype=='0'){
                Toastr::success('You are Logged in', 'Welcome', ["positionClass" => "toast-top-right"]);
                return redirect('/');
          
                
            }else{
                
                Toastr::success('You are Logged in', 'Welcome', ["positionClass" => "toast-top-right"]);
                return redirect('/home');
            }
            
           
        }
        else{
            Toastr::error('Invalid Credentials', 'Opps!', ["positionClass" => "toast-top-right"]);
            return redirect('/login');
           
        }}

        public function logout(){
            Session::flush();
            return redirect('/');
        }
       

        public function all_doctor(){
            
            $doctors = Doctor::all();
            return view('user.alldoctor',compact('doctors'));
        }

        public function profile(){
            $userid = session('id');
                $appointments = Appointment::where('user_id',$userid)->orderBy('id', 'desc')->get();;
            
         
            return view('user.profile',compact('appointments'));
        }
        public function user_appointment(){
            $doctors = Doctor::all();
            return view('user.appointment',compact('doctors'));
        }

        public function news_details($id){
             
            $news = News::findOrFail($id);
            $newss = News::all();
            
            return view('user.news-details',compact('news','newss'));
        }
        
        public function allnews(){
            $newss = News::all();
            return view('user.news',compact('newss'));
        }
        public function serach(Request $request){

            if($request->search){
                $searchs = Doctor::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(15);
                return view('user.search',compact('searchs'));
            }
        }

    }
