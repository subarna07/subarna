<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $model;
    public function __construct()
    {
        $this -> model = new Category();
    }
    public function index(){
        $data=[];
        $data['rows'] =  $this -> model -> latest()->get();
        //select *from Category
        return view('backend.category.index',compact('data'));
    }
     public function create(){
        return view('backend.category.create');
    }
     public function store(Request $request){
         $request->validate([
             'name'=> 'required',
             'slug' => 'required',
             'rank'=>'required',
             
         ]);
         try{ 
               $request->request->add(['created_by'->auth()->user()->id]);
               $this -> model -> create($request->all());
              session()->flash('success_message','Data has been inserted Successfully!!!');
         }
         catch(\Exception $e){
              session()->flash('error_message','Something went wrong');
         }
       
        return redirect()->route('Category.index');
    }
     public function show($id){
        //  dd('ok'); --to know the error in code
        $data = [];
        $data['row'] = $this -> model -> findOrFail($id);
        return view('backend.category.show',compact('data'));
    }
    public function edit($id){
        //  dd('ok'); --to know the error in code
        $data = [];
        $data['row'] = $this -> model -> findOrFail($id);
        return view('backend.category.edit',compact('data'));
    }
    public function update(Request $request,$id){
         $request->validate([
             'name'=> 'required',
             'email' => 'required',
             
         ]);
         try{
            $data['row'] = $this -> model -> find($id);
            $data['row']->update($request->all());
            session()->flash('success_message','Data has been updated Successfully!!!');
         }
         catch(\Exception $e){
              session()->flash('error_message','Something went wrong');
         }
       
         
        return redirect()->route('category.index');
    }
    public function delete(Request $request,$id){

         
         $data['row'] = $this -> model -> find($id);
         
         $data['row']->delete();
        session()->flash('success_message','Data has been deleted Successfully!!!');
        return redirect()->route('category.index');
    }
    
}
