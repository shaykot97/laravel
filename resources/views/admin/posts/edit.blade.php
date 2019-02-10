@extends('admin.master')
@section('heading') Edit Post @endsection

@section('content')

{!! Form::model($post , ['action'=> ['AdminPostsController@update', $post] , 'method'=> 'put' , 'files'=>true , 'class'=>"post-create-form" ]) !!}

<div class="form-inline-sections">
    <div class="form-group" style="width:70%;" > 
          {!! Form::text( 'title' , null , ['class' => 'form-control' , 'placeholder'=>'Post title']) !!}
          {!! Form::textarea( 'content' , null , ['class' => 'form-control' , 'placeholder'=>'Post content']) !!}
    </div>

    <div class="form-group" style="width:25%;margin:0px 20px;" > 
        {!! Form::label( 'category_id', 'Category' ) !!}
       {!! Form::select( 'category_id' , ['0'=>'Uncategorized'] + $categories , $post->category_id  ,  ['class' => 'form-control']) !!}

       {!! Form::label( 'photo_id', 'Photo' ,['style'=>'margin-top:30px;'] ) !!}
       {!! Form::file( 'photo_id') !!}
  </div>
</div>

  {!! Form::submit('Update Post' , ['class'=>'btn btn-primary']) !!} 
       

    {!! Form::close() !!}

    @include('includes/form-error')

@endsection