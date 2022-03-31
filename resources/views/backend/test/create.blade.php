@extends('backend.layouts.app',['panel' =>'Test','page'=>'Create'] )

@section('title','Home')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
              <div class="card-header">
                <h3 class="card-title">List Test</h3>
                <a class="btn btn-primary  btn-md float-right" href="{{ route('test.index')}}">
                  <i class="fas fa-list">
                  </i>
                List
                </a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            {{Form:: open(['route'=>'test','method'=> 'put'])}}
            @include('backend.test.includes.main_form')
            {{Form::close()}}
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
