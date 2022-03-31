    
        <div class="card-body">
                   
            <div class="form-group row mb-3">
              {{ Form::label('name', 'Name *', ['class' => 'col-1 col-form-label']) }}
                <div class="col-9">
                    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter name']) }}
                    @include('backend.includes.validation_error_message',['fieldname'=>'name'])
                </div>
            </div>
            
            <div class="form-group row mb-3">
               {{ Form::label('email', 'Email*', ['class' => 'col-1 col-form-label']) }}
                <div class="col-9">
                    {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter email']) }}
                    @include('backend.includes.validation_error_message',['fieldname'=>'email'])
                </div>
            </div>
            <div class="card-footer">
                {{Form::button('Submit',['type'=>'submit','class'=>'btn btn-info'])}}   
                
        
            </div>           
        </div>








        
