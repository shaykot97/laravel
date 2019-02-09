@extends('admin.master')
@section('heading') User roles @endsection

@section('content')

   <div class="cotainer">
       <div class="row">
           <div class="col-md-6">
        
                {!! Form::open(['action'=>'AdminRoleController@store','method'=>'post','class'=>'create-roll-form']) !!}
                    {!! Form::text('role' , null , ['placeholder'=>'Role Name','class'=>'form-control' ,'required'=>'true']) !!}
                    {!! Form::submit('Create Role' , ['class'=>'btn btn-primary']) !!}
                {{ Form::close() }}
           </div>


           <div class="col-md-6">
                <p> Available Roles </p>

                <ul>
                    @foreach ($roles as $role)
                        <li> {{ $role->name }} </li>
                    @endforeach
                </ul>
           </div>
       </div>
   </div>

@endsection