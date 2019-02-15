@extends('layouts.master')

@section('content')

<div class="col-md-12 col-lg-8 main-content">

    <h1 class="mb-4">{{ $post->title }}</h1>

    <div class="post-meta">
            <span class="user-photo"> <img style="height:50px;width:50px;border-radius:50%;" src="{{ asset($post->user->photo->src)  }}" alt=""> </span>
            <span class="user-name"> {{ $post->user->name  }} </span>
            <span class="mr-2"> | {{ $post->created_at->diffForHumans() }} </span>
            <span class="ml-2"> | <span class="fa fa-comments"></span> 3</span>
      </div>

    <div class="post-content-body">

      @if ($post->photo)
        <img src="{{ asset($post->photo->src) }}" class="img-fluid" alt="">
      @endif    

      <p> {{ $post->content }} </p>

  </div>

    
    <div class="pt-5">
      <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
    </div>


    <div class="pt-5">
      <h3 class="mb-5">6 Comments</h3>
      <ul class="comment-list">
  
        {{-- start a comment --}}

       

            {{-- end comment --}}

            @if (count($post->comments)> 0)
                @foreach ($post->comments as $comment)
                  @if ($comment->is_active)

                    <li class="comment">
                      <div class="vcard">
                        <img src="{{asset($comment->photo ? $comment->photo : '/images/default.jpg')}}" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3> {{ $post->user->name }} </h3>
                      <div class="meta">{{ $comment->created_at->diffForHumans() }}</div>
                        <p>{{ $comment->body }}</p>

                        {!! Form::open(['action'=>'CommentReplyController@store', 'method'=>'post','class'=>"post-create-form" ]) !!}
                          <input name="comment_id" type="hidden" value="{{$comment->id}}">
                          {!! Form::textarea( 'body' , null , ['class' => 'form-control' , 'placeholder'=>'Post content','style'=>'height: 48px!Important;margin:10px 0px;']) !!}
                          {!! Form::submit('Reply',['class'=>'reply']) !!}               
                        {!! Form::close() !!}

                      </div>

                          @if (count($comment->replys)>0)
                              @foreach ($comment->replys as $reply)                            
                                  <ul class="children">
                                    <li class="comment">
                                      <div class="vcard">
                                      <img src="{{asset($reply->photo ? $reply->photo : '/images/default.jpg')}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                      <h3>{{$reply->author}}</h3>
                                      <div class="meta">{{$reply->created_at}}</div>
                                      <p>{{$reply->body}}</p>
                                    </div>
                                    </li>
                                </ul>
                              @endforeach
                          @endif
                    </li>

                    @endif
                @endforeach
            @else
                <h1> This post has no comment </h1>
            @endif



          </ul>
        </li>

  
      </ul>
      <!-- END comment-list -->

      @if (Auth::check())
           
      <div class="comment-form-wrap">
      
        <h3>Leave a comment</h3>
       
      {!! Form::open([ 'action'=>'CommentController@store', 'method'=>'post', 'class'=>'p-5 bg-light']) !!}

        <input type="hidden" name="post_id" value="{{$post->id}}">

        <div class="form-group">
            {!! Form::label( 'body' , 'Comment' ) !!}
            {!! Form::textarea( 'body' , null , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Post Comment', ['class'=>'btn btn-primary']) !!}
        </div>
        
      {!! Form::close() !!}

      @if (session('comment_added'))
          <p class="alert alert-success"> {{ session('comment_added') }} </p>
      @endif

      </div>

        @else
            <p style="text-align:right"> <a href="#">Log in to make a comment</a> </p>
        @endif

    </div>

  </div>

          
      
    
@endsection