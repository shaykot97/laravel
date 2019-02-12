</h1>@extends('admin.master')
@section('heading') All Comments @endsection

@section('content')

<table class="table">

@if (count($comments) > 0)
        <thead>
          <tr>
            <th scope="col">Post</th>
            <th scope="col">Author</th>
            <th scope="col">Comment</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comments as $comment)
            <tr>
            <td scope="row"> <a href="{{route('post.show', $comment->post_id)}}" target="_blank"> {{ $comment->post->title }} </a> </td>
                <td>{{ $comment->author }}</td>
                <td>{{ $comment->body }}</td>
                <td style="display:flex;"> 
                    @if ($comment->is_active == 0)
                        {!! Form::open(['action'=> ['AdminCommentsController@update', $comment] , 'method'=> 'put' , 'files'=>true , 'class'=>"post-create-form", 'style'=>'margin-right:10px;' ]) !!}
                            <input type="hidden" name="is_active" value="1">
                            {!! Form::submit('Approve', ['class'=>'btn btn-secondary']) !!}
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['action'=> ['AdminCommentsController@update', $comment] , 'method'=> 'put' , 'files'=>true , 'class'=>"post-create-form", 'style'=>'margin-right:10px;' ]) !!}
                            <input type="hidden" name="is_active" value="0">
                            {!! Form::submit('Un approve', ['class'=>'btn btn-success']) !!}
                        {!! Form::close() !!}
                    @endif

                    {!! Form::open(['action'=> ['AdminCommentsController@destroy', $comment] , 'method'=> 'delete' , 'files'=>true , 'class'=>"post-create-form" ]) !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
              </tr>
          @endforeach
        
        </tbody>
      </table>

      @else
          <p style="text-align:center"> No comments found </p>
      @endif

@endsection