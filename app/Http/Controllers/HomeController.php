<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function index ()
    {
    	
		return view('welcome');
    }

    public function cat ()
    {
    	$name = "bersia";
    	$size = "10";
    	return view('cat',compact('name','size'));
    }
    public function report(Request $request)
    {
    	$validator = Validator::make($request->all(), $this->rules(), $this ->message());
  
    	
    	if($validator->passes()) {
    		return view('home')->with('name',$request->name)->with('age',$request->age);
    	}else{
    		return back()->withErrors($validator)->withInput();
    	}
    	
    }
	public function rules(){
    	return[
    		'name' => 'required|alpha',
    		'age' => 'required|numeric',
    	];
    }
    public function message() {
    	return[
			'name.required' => 'ห้ามเป็นช่องว่าง',
			'name.alpha' => 'ห้ามใส่ตัวอื่นนอกจากตัวอักษร',
			'age.required' => 'ห้ามเป็นช่องว่าง',
			'age.numeric' => 'ห้ามใส่ตัวอื่นนอกจากตัวเลข',
    	];

	}
}