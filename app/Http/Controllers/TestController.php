<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(){

    $date = [];
    $data['rows'] = Test::get();  // select * from tests
       return view('backend.test.index',compact('data'));
   }
   public function create(){
    return view('backend.test.create');
}
    public function store(Request $request){
        $request ->validate([
            'name'=>'required',
            'email'=>'required'
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required'
        ]);
        Test::create($request->all());

        session()->flash('success_message','Data Inserted Successfully');

        return redirect()->route('test.index');
    }

    public function show($id){
        dd();
        return view('backend.test.show');
    }
}
