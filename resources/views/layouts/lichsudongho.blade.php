@extends('layouts.row')
@section('home')

<div class="container">
	<div class="top-small">
		<div class="tc">
			<a title="Go to Bản tin Điện tử Họ Dương Việt Nam." href="http://hoduongvietnam.com.vn">
				<span>Trang chủ /&nbsp;</span>
				<meta content="1" property="position">
			</a>
		</div>
		<div class="xdt">
			<span>&nbsp;Lịch sử dòng họ</span>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-xs-12">
			<div class="tittle-wrap">
				<h2>
					<span>XÂY DỰNG DÒNG TỘC</span>
				</h2>
			</div>

			<div class="top-l">
				<div class="row">
					@foreach($BigHis as $bh)
					<div class="anh col-md-7 col-xs-12">
						<a href="{{route('chitiet')}}"><img src="{{('images/').$bh->images}}"></a>
					</div>
					
					<div class="col-md-5 col-xs-12">
						<div class="top">
							<a title="Lễ ra mắt Hội đồng Họ Dương huyện Đắk Mil, tỉnh Đắk Nông" href="{{route('chitiet')}}">
								<h3>
									{{$bh->title}}
								</h3>
							</a>

							<div class="post-information">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<span>{{$bh->created_at}}</span> 
								<i class="fa fa-edit"></i>
							</div>
							<div class="text-content">
								<p>
									{{$bh->summary}}...
								</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<div class="spacer"></div>

			<div class="bot">
				<div class="row">
					<!-- anh1 -->
					@foreach($HisList as $hl)
					<div class="img-bot col-md-6 col-xs-12">
						<div class="img-small">
							<a href="{{route('chitiet')}}"> <img src="{{('images/').$hl->images}}" style="width: 100%; height: 200px;">
							</a>
						</div>
						<div class="text-content">
							<a title="Hội nghị Tổng kết hoạt động Hội đồng Họ Dương Tây Nam bộ" href="{{route('chitiet')}}">
								<h3>
									{{$hl->title}}
								</h3>
							</a>
							<div class="post-information">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<span>{{$hl->created_at}}</span> 
								<i class="fa fa-edit">
									{{$hl->creator}}
								</i>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<!-- phân trang -->
			<div class="pagination-box clearfix">
				<div class="navigation">
					<ul class="">
						<li>
							{{$HisList->links()}}
						</li>
					</ul>
				</div>
			</div>
		</div>
		

@stop