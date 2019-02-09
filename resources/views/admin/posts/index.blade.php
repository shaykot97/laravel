@extends('admin.master')
@section('heading') All posts @endsection

@section('content')

    <table class="table table-striped users-table">
        <thead>
          <tr>
            <th scope="col">Photo</th>
            <th scope="col">Title</th>
            <th scope="col">Cartegory</th>
            <th scope="col">Author</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
            @if ($posts)
                @foreach ($posts as $post)
                    <tr>
                        <td> <img height="50" src="{{ asset($post->photo_id ? $post->photo->src : 'images/default.jpg') }} " alt=""></td>
                        <td> {{ $post->title }} </td>
                        <td> {{ $post->category_id == '0' ? 'Uncategorized' : $post->category->name }}  </td>
                        <td> {{ $post->user->name }}  </td>
                        <td> {{ $post->created_at->diffForHumans() }}  </td>
                        <td style="display:flex;">
                            {!! Form::open(['action'=>['AdminPostsController@edit', $post],'method'=>'get']) !!}
                                {!! Form::submit('Edit', ['class'=>'btn btn-primary']) !!}
                            {!! Form::close() !!}

                            {!! Form::open(['action'=>['AdminPostsController@destroy', $post],'method'=>'delete']) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>                    
                @endforeach
            @endif
        </tbody>
      </table>

@endsection