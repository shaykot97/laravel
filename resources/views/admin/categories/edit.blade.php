@extends('admin.master')
@section('heading') Categories @endsection

@section('content')

   <div class="cotainer">
       <div class="row">
           <div class="col-md-6">
        
                {!! Form::open(['action'=>['AdminCategoryController@update', $category],'method'=>'put','class'=>'create-roll-form']) !!}
                    {!! Form::text('name' , $category->name , ['placeholder'=>'Category Name','class'=>'form-control' ,'required'=>'true']) !!}
                    {!! Form::submit('Update Category' , ['class'=>'btn btn-primary']) !!}
                {{ Form::close() }}

                {!! Form::open(['action'=>['AdminCategoryController@destroy', $category],'method'=>'delete','class'=>'create-roll-form']) !!}
                    {!! Form::submit('Delete Category' , ['class'=>'btn btn-danger']) !!}
                {{ Form::close() }}
           </div>


           <div class="col-md-6">
               <p> Update or delete your category from heare </p>
           </div>
       </div>
   </div>

@endsection