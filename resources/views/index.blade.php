@extends('welcome')
@section('content')
    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/bg1.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                            <span>Welcome to <strong>Margo</strong></span>
                          </h2>
                <h3 class="animated3">
                              <span>The ultimate aim of your business</span>
                            </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img  class="img-responsive min_height" src="images/slider/bg2.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                                <span><strong>Margo</strong> for the highest</span>
                            </h2>
                <h3 class="animated5">
                              <span>The Key of your Success</span>
                            </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span>The way of <strong>Success</strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span>Why you are waiting</span>
                            </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


    <!-- Start Content -->
    <div id="content">


      <!-- Start Services Section -->
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <i class="fa fa-globe fa-4x"></i>
            </div>
            <div class="service-content">
              <h4>Johann Amos Comenius</h4>
              <p>Natura înzestrează copilul numai cu „semințele științei, ale moralității și religiozității”, ele devin un bun al fiecărui om numai prin educație.</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <i class="fa fa-magic fa-4x"></i>
            </div>
            <div class="service-content">
              <h4>Aristotel</h4>
              <p>Cei care educa copiii sunt demni de mai multa onoare decat cei care le dau viata; de aceea pe langa viata, daruiti copiilor si arta de a trai bine, educandu-i.</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <i class="fa fa-rocket fa-4x"></i>
            </div>
            <div class="service-content">
              <h4>Thomas Chandler Haliburton</h4>
              <p>Educatia pe care o primesti la colegiu iti arata cat de putin stim in realitate.</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
      <!-- End Services Section -->


      <!-- Start Portfolio Section -->
      <div class="project">
        <div class="container">
          <!-- Start Recent Projects Carousel -->
          <div class="recent-projects">
            <h4 class="title"><span>Ultimele Evenimente</span></h4>
            <div class="projects-carousel touch-carousel">
 @foreach($articles as $article)
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="images/portfolio-1/1.png" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>{{$article->title}}</h4>
                      <span>{{$article->author}}</span>
                      <span>Drawing</span>
                    </a>
                  </div>
                </div>
              </div>
@endforeach
              
                 


             

             

              

             
              

              

            </div>
          </div>
          <!-- End Recent Projects Carousel -->
        </div>
        <!-- .container -->
      </div>
      <!-- End Portfolio Section -->


      <!-- Divider -->
      <div class="hr1 margin-60"></div>


      <!-- Start News & Skill Section -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Latest News</span></h4>

            <!-- Start Latest Posts -->
            <div class="latest-posts-classic">

              <!-- Post 1 -->
              <div class="post-row">
                <div class="left-meta-post">
                  <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                  <div class="post-type"><i class="fa fa-picture-o"></i></div>
                </div>
                <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                <div class="post-content">
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet <a class="read-more" href="#">Read More...</a></p>
                </div>
              </div>

              <!-- Post 2 -->
              <div class="post-row">
                <div class="left-meta-post">
                  <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                  <div class="post-type"><i class="fa fa-picture-o"></i></div>
                </div>
                <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                <div class="post-content">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a class="read-more" href="#">Read More...</a></p>
                </div>
              </div>

            </div>
            <!-- End Latest Posts -->
          </div>
          <!-- .col-md-6 -->

          <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Numarul de elevi</span></h4>

            <div class="skill-shortcode">
             @foreach($specialit as $specialitate)
             @if($numar)
                <div class="skill">
                <p>{{$specialitate->denumire}}</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="{{(($specialitate->nr*100)/$numar)+50}}">
                    <span class="progress-bar-span">{{$specialitate->nr}}</span>
                    <span class="sr-only">{{(round($specialitate->nr*100)/$numar)}} Complete</span>
                  </div>
                </div>
              </div>
             @endif
              @endforeach
            </div>

          </div>
          <!-- .col-md-6 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
      <!-- End News & Skill Section -->


      <!-- Divider -->
      <div class="hr1 margin-60"></div>


      <!-- Start Clients/Partner Section -->
      <div class="container">
        <div class="our-clients">

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Our Clients</span></h4>

          <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

            <!-- Client 1 -->
            <div class="client-item item">
              <a href="#"><img src="images/c1.png" alt="" /></a>
            </div>

            <!-- Client 2 -->
            <div class="client-item item">
              <a href="#"><img src="images/c2.png" alt="" /></a>
            </div>

            <!-- Client 3 -->
            <div class="client-item item">
              <a href="#"><img src="images/c3.png" alt="" /></a>
            </div>

            <!-- Client 4 -->
            <div class="client-item item">
              <a href="#"><img src="images/c4.png" alt="" /></a>
            </div>

            <!-- Client 5 -->
            <div class="client-item item">
              <a href="#"><img src="images/c5.png" alt="" /></a>
            </div>

            <!-- Client 6 -->
            <div class="client-item item">
              <a href="#"><img src="images/c6.png" alt="" /></a>
            </div>

            <!-- Client 7 -->
            <div class="client-item item">
              <a href="#"><img src="images/c7.png" alt="" /></a>
            </div>

            <!-- Client 8 -->
            <div class="client-item item">
              <a href="#"><img src="images/c8.png" alt="" /></a>
            </div>

          </div>
        </div>
      </div>
      <!-- .container -->
      <!-- End Clients/Partner Section -->


    </div>
    <!-- End Content -->

@endsection