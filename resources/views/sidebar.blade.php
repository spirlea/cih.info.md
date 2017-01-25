   <!-- Sidebar -->
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
                   @foreach($sideb as $side)
                <li>
                  <a href="{{route('ShowSpecialities',['id'=>1])}}">{{$side->denumire}}</a>
                </li>
                @endforeach
              </ul>
            </div>

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4>Popular Post <span class="head-line"></span></h4>
              <ul>
                    @foreach($sidebar as $side)
                <li>
                  <div class="widget-thumb">
                    <a href="{{route('ShowArticle',['id'=>$side->id])}}"><img src="{{$side->image}}" alt="" /></a>
                  </div>
                  
                  <div class="widget-content">
                    <h5><a href="{{route('ShowArticle',['id'=>$side->id])}}">{{$side->title}}</a></h5>
                    <span>{{$side->date}}  Views:{{$side->views}}</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                
                  
                 
               
                  @endforeach
                
              </ul>
            </div>
        </div>
          <!--End sidebar-->