@extends('admin.master')
@section('heading') All Media @endsection

@section('content')

<div class="container">
  <div class="row">
      @foreach($photos as $photo)
        <div class="col-md-3"> <img width="200" height="200"  src="{{ asset($photo->src) }} " alt=""> 
          {!! Form::open(['action'=> ['AdminPhotoController@destroy', $photo] , 'method'=> 'delete' ]) !!}
              {!! Form::submit('Delete' , ['class'=>'btn btn-danger']) !!}
          {!! Form::close() !!}  
        </div>           
      @endforeach
  </div>
</div>



@endsection