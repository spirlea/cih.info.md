@extends('welcome')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Blog</h2>
            <p>Blog Page With Right Sidebar</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{URL("/index")}}">Home</a></li>
              <li>Blog</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">

          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box">
 @foreach($articles as $article)
            <!-- Start Post -->
            <div class="blog-post image-post">
              <!-- Post Thumb -->
              <div class="post-head">
                <a class="lightbox" title="This is an image title" href="images/blog-01.jpg">
                  <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                  <img alt="" src="images/blog-01.jpg">
                </a>
              </div>
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                <h2><a href="{{URL("/more")}}">{{$article->title}}</a></h2>
                <ul class="post-meta">
                  <li>By <a href="#">{{$article->author}}</a></li>
                  <li>{{$article->date}}</li>
                  <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                  
                </ul>
                <p>{{$article->description}}</p>
               <a class="main-button" href="{{route('ShowArticle',['id'=>$article->id])}}">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->
  @endforeach        
            <!-- Start Pagination -->
            <div id="pagination">
              <span class="all-pages">Page 1 of 3</span>
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <a class="next-page" href="#">Next</a>
            </div>
            <!-- End Pagination -->

          </div>
          <!-- End Blog Posts -->

          @include("sidebar")
          
        </div>
      </div>
    </div>
    <!-- End Content -->
@endsection