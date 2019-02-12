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
  

        <li class="comment">
          <div class="vcard">
            <img src="{{asset('/front/images/person_1.jpg')}}" alt="Image placeholder">
          </div>
          <div class="comment-body">
            <h3>Jean Doe</h3>
            <div class="meta">January 9, 2018 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            <p><a href="#" class="reply">Reply</a></p>
          </div>

                    <ul class="children">
                      <li class="comment">
                        <div class="vcard">
                        <img src="{{asset('/front/images/person_1.jpg')}}" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>
                      </li>
                    </ul>
            </li>
          </ul>
        </li>

  
      </ul>
      <!-- END comment-list -->
      
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
    </div>

  </div>
    
@endsection