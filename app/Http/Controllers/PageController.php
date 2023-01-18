<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

// here we linking the model which name is product with giving modal path
use App\Product;




class PageController extends Controller
{
public function index()
{
    return view('welcome');
}
public function uploadpage()
{
    return view('product');
}
public function store(Request $request)
{
    $data=new product();

    $file=$request->file;
    $filename=time().'.'.$file->getClientOriginalExtension();
    $request->file->move('assets',$filename);
    $data->file=$filename;

    $data->name=$request->name;
    $data->description=$request->description;
  

    $data->save();
    return redirect()->back();
}
public function show()
{
    $data=product::all();
    return view('showproduct',compact('data'));
}
public function download(Request $request,$file)
{
    log::info("Image is coming  ".$file);
        return response()->download(public_path('assests/'.$file));
}
}
