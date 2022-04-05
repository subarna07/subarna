@extends('backend.layouts.app',['panel'=>'Category','page'=>'show'])

@section('title','Home')

@section('content')
<div class="row">
          <div class="col-12">

            <table class="table tabble-striped">
                <tr>
                    <th>Name</th>
                    <td>{{$data['row']->name}}
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{$data['row']->slug}}
                </tr>
                <tr>
                    <th>Rank</th>
                    <td>{{$data['row']->rank}}
                </tr>
                <tr
                    <th>Short_description</th>
                    <td>{{$data['row']->short_description}}
               </tr>
               <tr>
                    <th>Description</th>
                    <td>{{$data['row']->description}}
              </tr>
              <tr>
                    <th>meta_title</th>
                    <td>{{$data['row']->meta_title}}
              </tr>
              <tr>
                    <th>meta_description</th>
                    <td>{{$data['row']->meta_description}}
              </tr> 
              <tr>
                      <th>image</th>
                    <td><img src="{{asset('images/category/' .$data['row']->image)}}" class="image-fluid" height="160px" width="160px"></td>
              </tr>

                    
                </tr>
                <tr>
                   
                   
                    
                    
                    
                    
                     
                     
                
                </tr>
            </table>
            
          </div>
         
        </div>
@endsection
