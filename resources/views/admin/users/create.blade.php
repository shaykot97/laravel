@extends('admin.master')
@section('heading') Create User @endsection

@section('content')

    {!! Form::open(['action'=> 'AdminUsersController@store' , 'method'=> 'post' , 'files'=>true , 'class'=>"create-user-form" ]) !!}

    <div class="form-group form-inline"> 
          {!! Form::text( 'name' , null , ['class' => 'form-control' , 'placeholder'=>'Users Name']) !!}
          {!! Form::text( 'email' , null , ['class' => 'form-control','placeholder'=>'Email']) !!}
          {!! Form::password( 'password' , ['class' => 'form-control','placeholder'=>'Pssword']) !!}
          {!! Form::select( 'role_id' , $roles , 4 ,  ['class' => 'form-control']) !!}
          {!! Form::select( 'status' , array('1'=>'Active','0'=>'Not active') , 0 ,  ['class' => 'form-control']) !!}
          {!! Form::file( 'photo_id') !!}
    </div>

        {!! Form::submit('Create User' , ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    @include('includes/form-error')

@endsection