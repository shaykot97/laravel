@extends('admin.master')
@section('heading') Create Post @endsection

@section('content')

    {!! Form::open(['action'=> 'AdminPostsController@store' , 'method'=> 'post' , 'files'=>true , 'class'=>"post-create-form" ]) !!}

<div class="form-inline-sections">
    <div class="form-group" style="width:70%;" > 
          {!! Form::text( 'title' , null , ['class' => 'form-control' , 'placeholder'=>'Post title']) !!}
          {!! Form::textarea( 'content' , null , ['class' => 'form-control' , 'placeholder'=>'Post content']) !!}
    </div>

    <div class="form-group" style="width:25%;margin:0px 20px;" > 
        {!! Form::label( 'category_id', 'Category' ) !!}
       {!! Form::select( 'category_id' , array('1'=>'One','2'=>'Two') , 4 ,  ['class' => 'form-control']) !!}

       {!! Form::label( 'photo_id', 'Photo' ,['style'=>'margin-top:30px;'] ) !!}
       {!! Form::file( 'photo_id') !!}
  </div>
</div>

  {!! Form::submit('Create User' , ['class'=>'btn btn-primary']) !!}
       

    {!! Form::close() !!}

    @include('includes/form-error')

@endsection