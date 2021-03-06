@extends('layouts.master')


{{-- Content section --}}

@section('content')

<div class="col-md-12 col-lg-8 main-content">
    <div class="row">
      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_5.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Food</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_6.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Travel</span>
                <span class="mr-2">March 15, 2018 </span> &bullet;
                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
              </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>

      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_7.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Travel, Asia</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_8.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Travel</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>

      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_9.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Travel</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_10.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Lifestyle</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>

      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_11.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Lifestyle</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
          <img src="{{asset('/front/images/img_12.jpg')}}" alt="Image placeholder">
          <div class="blog-content-body">
            <div class="post-meta">
              <span class="category">Food</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <nav aria-label="Page navigation" class="text-center">
          <ul class="pagination">
            <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>


    <div class="row mb-5 mt-5">

      <div class="col-md-12">
        <h2 class="mb-4">More Blog Posts</h2>
      </div>

      <div class="col-md-12">

        <div class="post-entry-horzontal">
          <a href="blog-single.html">
            <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url({{asset('/front/images/img_10.jpg')}});"></div>
            <span class="text">
              <div class="post-meta">
                <span class="category">Travel</span>
                <span class="mr-2">March 15, 2018 </span> &bullet;
                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
              </div>
              <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
            </span>
          </a>
        </div>
        <!-- END post -->

        <div class="post-entry-horzontal">
          <a href="blog-single.html">
            <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url({{asset('/front/images/img_11.jpg')}});"></div>
            <span class="text">
              <div class="post-meta">
                <span class="category">Lifestyle</span>
                <span class="mr-2">March 15, 2018 </span> &bullet;
                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
              </div>
              <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
            </span>
          </a>
        </div>
        <!-- END post -->

        <div class="post-entry-horzontal">
          <a href="blog-single.html">
            <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url({{asset('/front/images/img_12.jpg')}});"></div>
            <span class="text">
              <div class="post-meta">
                <span class="category">Food</span>
                <span class="mr-2">March 15, 2018 </span> &bullet;
                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
              </div>
              <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
            </span>
          </a>
        </div>
        <!-- END post -->

      </div>
    </div>
  </div>

  <!-- END main-content -->
    
@endsection