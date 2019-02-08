@extends('admin.master')
@section('heading') Edit User @endsection

@section('content')


    <div class="user-details" style="display: flex">
       <div class="user-image">
            @if ($user->photo_id)
                <img src="{{ asset($user->photo->src) }}" style="width:100px;height:100px;border-radius:50%;margin:20px;" alt="">
            @else
                <img src="{{ asset('images/default.jpg') }}" style="width:100px;height:100px;border-radius:50%;margin:20px;" alt="">
            @endif
       </div>

        <div class="user-details" style="padding:30px;">
            <b> {{$user->name}} </b>
            <p> {{$user->email}} </p>
        </div>
    </div>

    {!! Form::model($user ,['action'=> ['AdminUsersController@update', $user->id] , 'method'=> 'patch' , 'files'=>true , 'class'=>"create-user-form" ]) !!}

    <div class="form-group form-inline"> 
        {!! Form::text( 'name' , null , ['class' => 'form-control' , 'placeholder'=>'Users Name']) !!}
        {!! Form::text( 'email' , null , ['class' => 'form-control','placeholder'=>'Email']) !!}
        {!! Form::password( 'password' , ['class' => 'form-control','placeholder'=>'Pssword']) !!}
        {!! Form::select( 'role_id' , $roles , $user->role_id ,  ['class' => 'form-control']) !!}
        {!! Form::select( 'status' , array('1'=>'Active','0'=>'Not active') , 0 ,  ['class' => 'form-control']) !!}
        {!! Form::file( 'photo_id') !!}
  </div>
  
        {!! Form::submit('Update User' , ['class'=>'btn btn-primary']) !!}

  {!! Form::close() !!}

    @include('includes/form-error')

@endsection