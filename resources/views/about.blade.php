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
                <div class="item"><img alt="" src="images/slider/bg1.jpg"></div>
                <div class="item"><img alt="" src="images/slider/bg2.jpg"></div>
                <div class="item"><img alt="" src="images/slider/bg3.jpg"></div>
              </div>
              <!-- End Touch Slider -->

            </div>

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <div class="row">

         

           

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Classic Heading -->
          <DIV class="text-center">
          <h1>ECHIPA MANAGERIALA A COLEGIULUI IULIA HASDEU</h1>
          </div>
          <!-- Start Team Members -->
          <div class="row">
@foreach($menu as $men)
            <!-- Start Memebr  -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div >
                  <img style="height:155px;width:339px" alt="" src="{{$men->image}}" />
                  
                </div>
 
              </div>
            </div>
            <!-- End Memebr 1 -->
@endforeach
            

          </div>
          <!-- End Team Members -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          


        </div>
      </div>
    </div>
    <!-- End content -->
    
@endsection