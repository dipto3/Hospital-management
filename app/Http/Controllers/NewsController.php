<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class NewsController extends Controller
{
    public function create(){
        return view('admin.news.create');
    }

    public function store(Request $request){
        $news = new News;
        $news->title = $request->title;
       
        $news->description = $request->description;
       


        if ($imagee = $request->file('image')) {
            $destinationPath = 'storage/newsimg/';
            $profileImage = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $profileImage);
            $news['image'] = "$profileImage";
        }
        $news->save();
        Toastr::success('News Added', 'Success!', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function index()
    {
        $newss = News::all();

        return view('admin.news.index', compact('newss'));
    }
    public function edit($id)
    {
        $news  = News::find($id);
        
        return view('admin.news.edit', compact( 'news'));
    }
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
       
        $news->description = $request->description;
        



        if ($imagee = $request->file('image')) {
            $destinationPath = 'storage/newsimg/';
            $profileImage = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $profileImage);
            $news['image'] = "$profileImage";
        } else {
            unset($news['image']);
        }

        $news->save();
        Toastr::success('News Updated', 'Success!', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        Toastr::warning('News Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
