<div class="card-body">
                   
    <div class="form-group row mb-3">
      {{ Form::label('name', 'Name *', ['class' => 'col-2 col-form-label']) }}
        <div class="col-6">
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter name']) }}
        
            
            @include('backend.includes.validation_error_message',['fieldname'=>'name'])
        </div>
    </div>

     <div class="form-group row mb-3">
      {{ Form::label('slug', 'Slug *', ['class' => 'col-2 col-form-label']) }}
        <div class="col-6">
            {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Enter slug']) }}    
            @include('backend.includes.validation_error_message',['fieldname'=>'slug'])
        </div>
    </div>

    <div class="form-group row mb-3">
      {{ Form::label('rank', 'Rank *', ['class' => 'col-2 col-form-label']) }}
        <div class="col-6">
            {{ Form::number('rank', null, ['class' => 'form-control', 'id' => 'rank', 'placeholder' => 'Enter rank']) }}
            @include('backend.includes.validation_error_message',['fieldname'=>'rank'])
        </div>
    </div>

    <div class="form-group row mb-3">
      {{ Form::label('short_description', 'Short_description ', ['class' => 'col-2 col-form-label']) }}
        <div class="col-6">
            {{ Form::textarea('short_description', null, ['class' => 'form-control', 'id' => 'short_description', 'placeholder' => 'Enter short_description','rows'=>2]) }}
            @include('backend.includes.validation_error_message',['fieldname'=>'short_description'])
        </div>
    </div>

    <div class="form-group row mb-3">
      {{ Form::label('description', 'Description ', ['class' => 'col-2 col-form-label']) }}
        <div class="col-6">
            {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Enter description','rows'=>4]) }}
            @include('backend.includes.validation_error_message',['fieldname'=>'description'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('meta_title', 'Meta_title ', ['class' => 'col-2 col-form-label']) }}
          <div class="col-6">
              {{ Form::text('meta_title', null, ['class' => 'form-control', 'id' => 'meta_title', 'placeholder' => 'Enter meta_title']) }}
              @include('backend.includes.validation_error_message',['fieldname'=>'meta_title'])
          </div>
      </div>

      <div class="form-group row mb-3">
        {{ Form::label('meta_keyword', 'Meta_keyword ', ['class' => 'col-2 col-form-label']) }}
          <div class="col-6">
              {{ Form::text('meta_keyword', null, ['class' => 'form-control', 'id' => 'meta_keyword', 'placeholder' => 'Enter meta_keyword']) }}  
              @include('backend.includes.validation_error_message',['fieldname'=>'meta_keyword'])
          </div>
      </div>

      <div class="form-group row mb-3">
        {{ Form::label('meta_description', 'Meta_description ', ['class' => 'col-2 col-form-label']) }}
          <div class="col-6">
              {{ Form::textarea('meta_description', null, ['class' => 'form-control', 'id' => 'meta_description', 'placeholder' => 'Enter meta_description','rows'=>2]) }}
              @include('backend.includes.validation_error_message',['fieldname'=>'meta_description'])
          </div>
      </div>
      </div>
      <div class="form-group row mb-3">
        {{ Form::label('image_field', 'Image ', ['class' => 'col-2 col-form-label']) }}
          <div class="col-6">
              {{ Form::file('image_field', null, ['class' => 'form-control', 'id' => 'image_field']) }}
              @include('backend.includes.validation_error_message',['fieldname'=>'image_field'])
          </div>
      </div>
      <div class="form-group row">
        <div class="col-3">
          {{ Form::label('status', 'status ', ['class' => 'radiostatus'])}}
        </div>
        <div class="col-9">
<label for="" class="radio-inline">
  {{Form::radio('status',1,true)}}Active</label>
  <label for="" class="radio-inline">
    {{Form::radio('status',0,false)}}In-Active</label>
      </div>
    </div>

    <div class="card-footer">
        {{Form::button('Submit',['type'=>'submit','class'=>'btn btn-info'])}}   
    </div>           
</div>