    
        <div class="card-body">
                   
            <div class="form-group row mb-3">
              {{ Form::label('name', 'Name *', ['class' => 'col-1 col-form-label']) }}
                <div class="col-9">
                    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter name']) }}
                    @include('backend.includes.validation_error_message',['fieldname'=>'name'])
                </div>
            </div>
            
            <div class="form-group row mb-3">
               {{ Form::label('slug', 'Slug *', ['class' => 'col-1 col-form-label']) }}
                <div class="col-9">
                    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter slug']) }}
                    @include('backend.includes.validation_error_message',['fieldname'=>'slug'])
                </div>
            </div>
            <div class="form-group row mb-3">
                {{ Form::label('rank', 'rank *', ['class' => 'col-1 col-form-label']) }}
                 <div class="col-9">
                     {{ Form::number('rank', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter rank']) }}
                     @include('backend.includes.validation_error_message',['fieldname'=>'rank'])
                 </div>
             </div>
            <div class="card-footer">
                {{Form::button('Submit',['type'=>'submit','class'=>'btn btn-info'])}}   
                
        
            </div>           
        </div>








        
