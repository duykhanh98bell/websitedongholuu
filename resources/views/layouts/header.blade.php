<!--Banner-->
  <div class="banner">  
      </div>
<!--banner-mobile-->
  <div class="header-moblie">
  <img src="{{asset('public/frontend/images/banner-mobile.jpg')}}" class="img-fluid" alt="">
  </div>
  <!--Header Start-->
  <header>
      <div class="container-fluid">
        <div class="row ">
            <div class="header-main col-mg-12">
                
            </div>
        </div>
      </div>
  </header>
  <!--Header End-->
  <!-- Menu Navigation Start -->
  <div class="menu-fixed">
    <div class="navbar dark navbar-default megamenu clearfix menu-wrap">
      <div class="container">
        <div class="row">
          <div class="menu-main">
            <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="{{route('trangchu')}}"><i class="fas fa-home"></i></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span><i class="fa fa-bars" aria-hidden="true"></i></span></button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                <ul class="navbar-nav nav justify-content-center">
                  <li class="nav-item"> <a class="nav-link" href="#">GIỚI THIỆU</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                       @foreach($ViewIntro as $in)
                       <a class="dropdown-item" href="{{$in->slug}}">{{$in->name}}</a>
                       @endforeach
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('lichsudongho')}}">LỊCH SỬ DÒNG HỌ</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                        @foreach($ViewHs as $hs)
                       <a class="dropdown-item" href="{{$hs->slug}}">{{$hs->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('thongtinsukien')}}">THÔNG TIN SỰ KIỆN</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                       @foreach($ViewIf as $if)
                       <a class="dropdown-item" href="{{$if->slug}}">{{$if->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('khuyenhockhuyentai')}}">KHUYẾN HỌC KHUYẾN TÀI</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                       @foreach($ViewKk as $Kk)
                       <a class="dropdown-item" href="{{$Kk->slug}}">{{$Kk->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('nguoitotviectot')}}">NGƯỜI TỐT VIỆC TỐT</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                       @foreach($ViewGood as $Good)
                       <a class="dropdown-item" href="{{$Good->slug}}">{{$Good->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('thuvien')}}">THƯ VIỆN</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                       @foreach($ViewLb as $Lb)
                       <a class="dropdown-item" href="{{$Lb->slug}}">{{$Lb->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('congdongdonggop')}}">CỘNG ĐỒNG HỌ LƯU ĐÓNG GÓP</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                        @foreach($ViewCom as $Com)
                       <a class="dropdown-item" href="{{$Com->slug}}">{{$Com->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('gopy')}}">GÓP Ý</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                       @foreach($ViewFb as $Fb)
                       <a class="dropdown-item" href="{{$Fb->slug}}">{{$Fb->name}}</a>
                       @endforeach
                     </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menu Navigation End -->
  <!--HeaderLine Start-->
  <section id="newsticker">
    <div class="headline-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-1 col-sm-2 col-xs-3 headerline-left">
            <div class="headline-title ">
              <h3>TIN VẮN</h3>
            </div>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-9 headerline-slide">
            <ul class="ticker clearfix inline-block">
              <li><a href="#">Trại hè Thanh niên Họ Dương Việt Nam năm 2019: Hành trình tự hào</a></li>
              <li><a href="#">Thí sinh Dương Thị Thu Định xuất sắc đạt giải nhất chung kết cuộc thi cùng lên Võ đài khởi nghiệp năm 2019</a></li>
              <li><a href="#">Bài phát biểu Bế mạc Trại hè Thanh niên Họ Dương Việt Nam lần thứ II năm 2019</a></li>
              <li><a href="#">Nội dung chương trình Trại hè thanh niên Họ Dương Việt Nam năm 2019</a></li>
              <li><a href="#">Chương trình Giao lưu với các diễn giả trẻ: Nơi vun đắp những giá trị</a></li>
              <li><a href="#">Người bạn gái Họ Dương</a></li>
              <li><a href="#">Thanh niên Họ Dương quản trị tâm thế, thay đổi tư duy làm chủ cuộc đời</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 headerline-right">
            <!-- Search Form start -->
            <div class="form-Search">
              <form role="search" method="get" action="#" class="form-right">
                <input type="text" class="search-field" placeholder="Tìm kiếm..." name="s">
                <button type="submit" id="search-submit"> <i class="fa fa-search"></i></button>
              </form>
              <!-- Search Form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>