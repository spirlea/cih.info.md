@extends('welcome')
@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Blog</h2>
            <p>Blog Subtitle</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li><a href="#">Blog</a></li>
              <li>Gallery Post With Nice Lightbox</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">
          <div class="col-md-9 blog-box">

            <!-- Start Single Post Area -->
            <div class="blog-post gallery-post">

              <!-- Start Single Post (Gallery Slider) -->
              <div class="post-head">
                <div class="touch-slider post-slider">
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="{{URL::asset('images/blog-02.jpg')}}" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/blog-02.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="{{URL::asset('images/blog-03.jpg')}}" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/blog-03.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="{{URL::asset('images/blog-04.jpg')}}" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="{{URL::asset('images/blog-04.jpg')}}">
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Single Post (Gallery) -->
              @if($article)
              <!-- Start Single Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                <h2>{{$article->title}}</h2>
                <ul class="post-meta">
                  <li>By <a href="#">{{$article->author}}</a></li>
                  <li>{{$article->date}}</li>
                  <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                  
                </ul>
                <p>{{$article->content}}</p>
                <div class="post-bottom clearfix">
                  <div class="post-tags-list">
                    <a href="#">Theme</a>
                    <a href="#">Mobile</a>
                    <a href="#">Design</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Jquery</a>
                  </div>
                  <div class="post-share">
                    <span>Share This Post:</span>
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Single Post Content -->

            </div>
            <!-- End Single Post Area -->
@endif
          </div>

               @include("sidebar")
          
        </div>

      </div>
    </div>
    <!-- End content -->
@endsection
