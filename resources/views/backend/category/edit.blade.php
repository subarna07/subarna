@extends('backend.layouts.app',['panel'=>'Test','page'=>'edit'])

@section('title','Home')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "{{route('test.update',['id'=>$data['row']->id]) }}" method="POST">
                @method('put')
                @csrf
                {{Form:: model($data['row'],['route'=>['test.update',$data['row']->id],'method'=> 'put'])}}
            @include('backend.test.includes.main_form')
            {{Form::close()}}
                <!-- /.card-body -->

                
              </form>
            </div>

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection