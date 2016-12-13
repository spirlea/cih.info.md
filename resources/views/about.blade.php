@extends('welcome')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Despre</h2>
            <p>Colegiul Iulia Hasdeu</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="">Home</a></li>
              <li>Despre</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">

            <div class="col-md-7">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Colegiul Iulia Hasdeu</span></h4>

              <!-- Some Text -->
              <p>A fost constituit, prin fuzionarea a două instituții de învățământ, în anul 2003. Prima din ele  - Școala Pedagogică inaugurată la Cahul la 14 aprilie 1945 și reorganizată în anul 1992, în Școala Normală, iar peste doi ani – în Colegiu de Pedagogie și Artă; a doua – Sovhozul-Tehnicum de Hidroameliorare creat la 15 aprilie 1964 și transformat în Colegiu Tehnic Agricol la 26 iunie 1992.Începând cu anul 1999, Colegiul Industrial Pedagogic a constituit o subdiviziune funcțională a noii Universități de Stat din localitate, pentru ca ulterior să devină instituție autonomă de învățământ non universitar de treapta a patra.Construcția actualului bloc d studii al colegiului și a celor patru cămine a fost încheiată în 1971. Sintetizând și evoluând bogatele tradiții ale celor două instituții matrice, Colegiul Industrial Pedagogic, cu un contingent de 782 de elevi, pregătește specialiști calificați în șapte domenii: pedagogia învățământului primar, pedagogia preșcolară, instruirea muzicală, instruirea în arte plastice, asistența socială, contabilitate, informatică, finanțe și bănci.</p>
            </div>

            <div class="col-md-5">

              <!-- Start Touch Slider -->
              <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                <div class="item"><img alt="" src="images/about-01.jpg"></div>
                <div class="item"><img alt="" src="images/about-02.jpg"></div>
                <div class="item"><img alt="" src="images/about-03.jpg"></div>
              </div>
              <!-- End Touch Slider -->

            </div>

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <div class="row">

            <div class="col-md-6">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Our Skills</span></h4>

              <div class="skill-shortcode">
                <div class="skill">
                  <p>Web Design</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" data-percentage="60">
                      <span class="progress-bar-span">60%</span>
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <p>Wordpress</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" data-percentage="80">
                      <span class="progress-bar-span">80%</span>
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <p>CSS 3</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" data-percentage="90">
                      <span class="progress-bar-span">90%</span>
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <p>HTML 5</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" data-percentage="100">
                      <span class="progress-bar-span">100%</span>
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-6">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Our Solutions</span></h4>

              <!-- Accordion -->
              <div class="panel-group" id="accordion">

                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa fa-desktop"></i> Fully Responsive Theme
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src="images/bussniss-pic.jpg" /> <strong class="accent-color">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <strong>printer</strong> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                  </div>
                </div>
                <!-- End Accordion 1 -->

                <!-- Start Accordion 2 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa fa-gift"></i> Touchable Slider
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
                <!-- End Accordion 2 -->

              </div>
            </div>

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Administratia</span></h4>

          <!-- Start Team Members -->
          <div class="row">

            <!-- Start Memebr 1 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/face_1.png" />
                  <div class="member-name">Tataru Gheorghe<span>Director</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 1 -->

            <!-- Start Memebr 2 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/face_2.png" />
                  <div class="member-name">Chihai <span>Director Adjunct</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 2 -->

            <!-- Start Memebr 3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/face_3.png" />
                  <div class="member-name">Chris John <span>Developer</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 3 -->

            <!-- Start Memebr 4 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/face_4.png" />
                  <div class="member-name">Sara John <span>Developer</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 4 -->

          </div>
          <!-- End Team Members -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Start Clients Carousel -->
          <div class="our-clients">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Happy Clients</span></h4>

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
          <!-- End Clients Carousel -->


        </div>
      </div>
    </div>
    <!-- End content -->
    
@endsection