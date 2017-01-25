@extends('welcome')
@section('content')
    <!-- Start Home Page Slider -->
    <section id="home">
        <div class="container">
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

          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img  class="img-responsive min_height" src="images/slider/bg2.jpg" alt="slider">
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
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
        </div>
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
                    <a class="lightbox" data-lightbox-type="ajax" href="{{$article->image}}">
                      <div class="thumb-overlay"><i class="fa fa-picture-o"></i></div>
                      <img alt="" src="{{$article->image}}" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="{{route('ShowArticle',['id'=>$article->id])}}">
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
            <h4 class="classic-title"><span>Postări populare</span></h4>

            <!-- Start Latest Posts -->
            <div class="latest-posts-classic">
              @foreach($sidebar as $side)
              <!-- Post 1 -->
              <div class="post-row">
                <div class="left-meta-post">
                  <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                  <div class="post-type"><i class="fa fa-picture-o"></i></div>
                </div>
                <h3 class="post-title"><a href="#">{{$side->title}}</a></h3>
                <div class="post-content">
                  <p>{{$side->description}}<a class="read-more" href="{{route('ShowArticle',['id'=>$article->id])}}">Citește mai mult...</a></p>
                </div>
              </div>
              @endforeach
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

      <!-- Divider -->
      <div class="hr1 margin-60"></div>
    </div>
    <!-- End Content -->

@endsection