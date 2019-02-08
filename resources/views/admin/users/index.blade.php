@extends('admin.master')
@section('heading') Users @endsection

@section('content')

@if (session('user_updated'))
    <div class="alert alert-info" role="alert">
        {{ session('user_updated') }}
    </div>
@endif



@if (session('user_deleted'))
    <div class="alert alert-danger" role="alert">
        {{ session('user_deleted') }}
    </div>
@endif
    
    <table class="table table-striped users-table">
        <thead>
          <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Id</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
                <tr>                    
                    @if ($user->photo_id)
                        <td><img src="{{ asset($user->photo->src) }}" style="width:50px;height:50px;border-radius:50%;" alt=""> </td>
                    @else
                        <td><img src="{{ asset('images/default.jpg') }}" style="width:50px;height:50px;border-radius:50%;" alt=""> </td>
                    @endif

                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->role->name }} </td>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->is_active == 1 ? 'Active' : 'Not active' }} </td>
                    <td> {{ $user->created_at->diffForHumans() }} </td>
                    <td style="line-height:50px;display:flex">
                        {{-- <a class="btn btn-primary" href="{{ route('users.edit' , $user->id) }}">Edit</a>   --}}

                        {!! Form::open(['action'=>['AdminUsersController@edit',$user->id],'method'=>'get']) !!}
                            {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        {!! Form::open(['action'=>['AdminUsersController@destroy',$user->id],'method'=>'delete']) !!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        @endif()
        
        </tbody>
      </table>

@endsection