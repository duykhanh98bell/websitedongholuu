@extends('layouts.home')
@section('home')

    <main>
        <div class="container">
            <div class="row home">
            <div class="main col-lg-9 col-md-9 col-sm-8">
                    <!-- tin moi  -->
                    <section>
                        <div class="row">
                            <!-- tin trai -->
                            @foreach($NewL as $nl)
                            <div class="col-md-8 small-section">
                                <div class="post-item-tc clearfix">
                                    <div class="img-thumb">
                                        <a href="{{route('chitiet')}}"><img src="{{('images/').$nl->images}}" class="img-fluid"
                                                alt="Ảnh giao lưu họ Dương"></a>
                                    </div>
                                    <div class="post-content-tc">
                                        <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="{{route('chitiet')}}">
                                            <h3>{{$nl->title}}</h3>
                                        </a>
                                        <div class="post-information clearfix">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"> <span>{{$nl->created_at}}</span></i></li>
                                                <li><i class="fas fa-edit"> </i><a href="#">{{$nl->creator}}</a></li>

                                            </ul>
                                        </div>
                                        <div class="text-content">
                                            <p>{{$nl->summary}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- tin phai -->
                            
                            <div class="col-md-4 no-padding">
                                <div class="hot-new">
                                    <ul>
                                        @foreach($NewR as $nr)
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{('images/'.$nr->images)}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>{{$nr->title}} </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> {{$nr->created_at}}</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- slider -->
                    <section>
                        <div class="row slider">
                            <div class="owl-carousel owl-theme col-md-12">
                                @foreach($NewA as $na)
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{'images/'.$na->images}}" alt="">
                                        <p>{{$na->title}} ...</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-md-12"><img width="100%" src="{{asset('public/frontend/images/banner.jpg')}}" alt=""></div>

                        </div>
                    </section>
                    <!-- tin tuc co ban -->
                    <section>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Lịch sử dòng họ</span></h3>
                                    </div>
                                     @foreach($NewHis as $nh)
                                    <div class="post-item-main clearfix">

                                        <div class="img-thumb">
                                            <a href="{{route('chitiet')}}"><img src="{{('images/'.$nh->images)}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="{{route('chitiet')}}">
                                                <h3>{{$nh->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$nh->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">{{$nh->creator}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$nh->content}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="post-item">
                                        <ul>
                                            @foreach($ShowHis as $de)
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="{{route('chitiet')}}"><img src="{{asset('images/'.$de->images)}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="{{route('chitiet')}}">
                                                                <p>{{$de->title}}</p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$de->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Thông tin sự kiện</span></h3>
                                    </div>
                                    @foreach($NewIf as $ni)
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{'images/'.$ni->images}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>{{$ni->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$ni->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">{{$ni->creator}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$ni->content}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="post-item">
                                        <ul>
                                            @foreach($ShowIf as $if)
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('images/'.$if->images)}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>{{$if->title}}</p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$if->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Khuyến học khuyến tài</span></h3>
                                    </div>
                                    @foreach($NewKk as $nk)
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{'images/'.$nk->images}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>{{$nk->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$nk->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">{{$nk->creator}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$nk->content}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="post-item">
                                        <ul>
                                            @foreach($ShowKk as $kk)
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('images/'.$kk->images)}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>{{$kk->title}} </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$kk->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Người tốt việc tốt</span></h3>
                                    </div>
                                    @foreach($NewPg as $np)
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{'images/'.$np->images}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>{{$np->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$np->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">{{$np->creator}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$np->content}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="post-item">
                                        <ul>
                                            @foreach($ShowPg as $pg)
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('images/'.$pg->images)}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>{{$pg->title}}</p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$pg->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Cộng đồng họ Lưu</span></h3>
                                    </div>
                                    @foreach($NewCom as $nc)
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{'images/'.$nc->images}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>{{$nc->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$nc->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">{{$nc->creator}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$nc->content}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="post-item">
                                        <ul>
                                            @foreach($ShowCom as $com)
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('images/'.$com->images)}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>{{$com->title}} </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$com->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Góp ý và phản hồi</span></h3>
                                    </div>
                                    @foreach($NewFb as $nf)
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{'images/'.$nf->images}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>{{$nf->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$nf->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">{{$nf->creator}}</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$nf->content}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="post-item">
                                        <ul>
                                            @foreach($ShowFb as $fb)
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('images/'.$fb->images)}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>{{$fb->title}} </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$fb->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- slide thư viện -->

                    <section>
                        <div class="main-new">
                            <div class="title-name">
                                <h3><span> Thư viện</span></h3>
                            </div>
                            <div class="owl-carousel owl-theme col-md-12">
                                @foreach($ShowLb as $lb)
                                <div class="item"><a href="#"><img src="{{asset('images/'.$lb->images)}}" alt="">
                                        <p>{{$lb->title}}</p>
                                    </a></div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
@stop