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


          <!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar">

            <!-- Search Widget -->
            <div class="widget widget-search">
              <form action="#">
                <input type="search" placeholder="Enter Keywords..." />
                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <!-- Categories Widget -->
            <div class="widget widget-categories">
              <h4>Categories <span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="#">Brandign</a>
                </li>
                <li>
                  <a href="#">Design</a>
                </li>
                <li>
                  <a href="#">Development</a>
                </li>
                <li>
                  <a href="#">Graphic</a>
                </li>
              </ul>
            </div>

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4>Popular Post <span class="head-line"></span></h4>
              <ul>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>

            <!-- Video Widget -->
            <div class="widget">
              <h4>Video <span class="head-line"></span></h4>
              <div>
                <iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450"></iframe>
              </div>
            </div>

            <!-- Tags Widget -->
            <div class="widget widget-tags">
              <h4>Tags <span class="head-line"></span></h4>
              <div class="tagcloud">
                <a href="#">Portfolio</a>
                <a href="#">Theme</a>
                <a href="#">Mobile</a>
                <a href="#">Design</a>
                <a href="#">Wordpress</a>
                <a href="#">Jquery</a>
                <a href="#">CSS</a>
                <a href="#">Modern</a>
                <a href="#">Theme</a>
                <a href="#">Icons</a>
                <a href="#">Google</a>
              </div>
            </div>

          </div>
          <!--End sidebar-->


        </div>
      </div>
    </div>
    <!-- End Content -->
@endsection