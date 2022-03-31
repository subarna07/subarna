<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model =new Test();
    }
   public function index(){

    $date = [];
    $data['rows'] = $this->model->latest()->get();  // select * from tests
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
        create($request->all());
        session()->flash('success_message','Data inserted successfully');
        return redirect()->route('test.index');
    }
    public function show($id){
        $data = [];
        $data['row'] = $this()->model->find($id);

        return view('backend.test.show',compact('data'));
    }
    public function edit($id){
        $data = [];
        $data['row'] = $this()->model->find($id);

        return view('backend.test.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $request ->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        $data['row'] = $this()->model->find($id);

        $data['row']->update($request->all());

        session()->flash('success_message','Data Updated Successfully');

        return redirect()->route('test.index');
    }
    public function delete($id){
     
        $data['row'] = $this()->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data deleted Successfully');

        return redirect()->route('test.index');
    }
}
