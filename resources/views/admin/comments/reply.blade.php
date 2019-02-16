@extends('admin.master')
@section('heading') All replies @endsection

@section('content')

<table class="table">

@if (count($replys) > 0)
        <thead>
          <tr>
            <th scope="col">Author</th>
            <th scope="col">Email</th>
            <th scope="col">Body</th>
            <th scope="col">Body</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($replys as $reply)
            <tr>
                <td scope="row"> {{ $reply->author }} </td>
                <td scope="row"> {{ $reply->email }} </td>
                <td scope="row"> {{ $reply->body }} </td>
                <td style="display:flex;"> 

                    @if ($reply->is_active == 0)
                    {!! Form::open(['action'=> ['CommentReplyController@update', $reply] , 'method'=> 'put' , 'files'=>true , 'class'=>"post-create-form", 'style'=>'margin-right:10px;' ]) !!}
                        <input type="hidden" name="is_active" value="1">
                        {!! Form::submit('Approve', ['class'=>'btn btn-secondary']) !!}
                    {!! Form::close() !!}
                    @else
                        {!! Form::open(['action'=> ['CommentReplyController@update', $reply] , 'method'=> 'put' , 'files'=>true , 'class'=>"post-create-form", 'style'=>'margin-right:10px;' ]) !!}
                            <input type="hidden" name="is_active" value="0">
                            {!! Form::submit('Un approve', ['class'=>'btn btn-success']) !!}
                        {!! Form::close() !!}
                    @endif

                    {!! Form::open(['action'=> ['CommentReplyController@destroy', $reply] , 'method'=> 'delete' , 'files'=>true , 'class'=>"post-create-form" ]) !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
              </tr>
          @endforeach
        
        </tbody>
      </table>

      @else
          <p style="text-align:center"> No reply found </p>
      @endif

@endsection