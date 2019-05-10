@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
$guest_online = DB::table('guest_online')->get();
?>
<div class="box-slogan">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {!! @$slogan[0]->content !!}
                <div class="col-md-6 col-xs-12">
                    <div class="item-box">
                        {!! @$slogan[1]->content !!}
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="item-box">
                        {!! @$slogan[2]->content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 banner-about">
                @if(isset($sliders))
                <div class="slider">
                    <div class="">
                        <div class="">
                            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach(@$sliders as $k=>$slider)
                                    <div class="item @if($k==0) active @endif">
                                        <img src="{{asset('upload/hinhanh/'.$slider->photo)}}">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>  
                @endif
            </div>
        </div>
    </div>
</div>
<div class="project">
    <div class="container">
        <div class="row">
            <h3 class="title_home">Dự án đã thực hiện</h3>
            <div class="list-hot-item">
                <div class="col-md-8 left">
                    @for($i = 0 ; $i <=3; $i++)
                    <div class="box-item col-md-6">
                        <a href="{{asset('du-an/'.@$project[$i]->alias.'.html')}}" title="">
                            <p><img src="{{asset('upload/news/'.@$project[$i]->photo)}}"></p>
                            <div class="box_fix"></div>
                            <div class="short-des-home">
                                <div class="name_vk">{{@$project[$i]->name}}</div>
                                <div class="readmore">
                                    <span>Xem thêm</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endfor
                   
                </div>
                <div class="col-md-4 right rights rightxx">
                    <a href="{{asset('du-an/'.@$project[4]->alias.'.html')}}" title="{{@$project[4]->name}}">
                        <p><img src="{{asset('upload/news/'.@$project[4]->photo)}}"></p>
                        <div class="box_fixs"></div>
                        <div class="short-des-home right_banner">
                            <div class="name_vk">{{@$project[4]->name}}</div>
                            <div class="readmore">
                                <span>Xem thêm</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="all-item"><a href="{{url('du-an/'.$cateProjectHome->alias)}}" class="read-more-all">Xem tất cả</a></div>
        </div>
    </div>
</div>
<div class="service">
    <div class="container">
        <div class="row">
            <h3 class="title_home">Dịch vụ của chúng tôi</h3>
            <div class="box-service-home">
                @foreach($services as $service)
                <div class="col-md-6 col-xs-12">
                    <p><a href="{{url('dich-vu/'.$service->alias.'.html')}}" title="{{$service->name}}"><img src="{{asset('upload/news/'.$service->photo)}}"></a></p>
                    <p class="name_service_home"><a href="{{url('dich-vu/'.$service->alias.'.html')}}" title="{{$service->name}}">{{$service->name}}</a></p>
                    <div class="short-des-service">
                        {!! $service->mota !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="about_home">
    <div class="container">
        <div class="row" style="background: url('{{asset('upload/hinhanh/'.$about->photo)}}') no-repeat right;">
            <div class="col-md-5 col-xs-12">
                <div class="box-about-home">
                    <p class="title-about-home">{{$about->name}}</p>
                    <div class="short-des-about">
                        {!! $about->mota !!}
                    </div>
                    <a href="{{url('gioi-thieu')}}" title="Xem thêm"><p class="readmore"><span>Xem thêm</span></p></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partner">
    <div class="container">
        <div class="row">
            <h3 class="title_home">Đối tác của chúng tôi</h3>
            <div class="list-partner">
                @foreach($partners as $p)
                <div class="col-md-6 col-xs-6">
                    <img src="{{ asset('upload/banner/'.$p->photo) }}" class="img-responsive">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="news_home">
    <div class="container">
        <div class="row">
            <p class="title-about-home">Tin tức</p>
            <div class="box-news-home">
                @foreach($news as $item_news)
                <div class="col-md-6 col-xs-12 mb-30">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="{{url('tin-tuc/'.$item_news->alias.'.html')}}" title="">
                            <img src="{{asset('upload/news/'.$item_news->photo)}}">
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="{{url('tin-tuc/'.$item_news->alias.'.html')}}" title="">{{$item_news->name}}</a></div>
                        <div class="short-news">{!! $item_news->mota !!}</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="{{url('tin-tuc/'.$item_news->alias.'.html')}}" title="Xem thêm"><span>Xem thêm</span></a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="box-contact-home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <!-- <p class="title-about-home">Liên hệ</p>
                <p class="p1">Bạn đang muốn thiết kế không gian sống</p> -->
                <p class="p2">Hãy liên hệ với chúng tôi</p>
                <form action="{{route('postContact')}}" method="post" id="form-contact" accept-charset="utf-8">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <input type="text" name="name" required="" class="form-control" value="" placeholder="Họ tên">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" required="" class="form-control" value="" placeholder="Số điện thoại">
                    </div>
                     <div class="col-md-6">
                        <input type="email" name="email" required="" class="form-control" value="" placeholder="Email">
                    </div>
                     <div class="col-md-6">
                        <input type="text" name="address" required="" class="form-control" value="" placeholder="Địa chỉ">
                    </div>
                    <div class="col-md-12">
                        <textarea name="content" class="form-control" rows="5" placeholder="Nội dung"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-send">Gửi</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4 class="title-number-access">Số lượt truy cập</h4>
                <div class="box-number-access">
                    <div class="col-md-12 total-number">
                        <span>{{$setting->number_view}}</span>
                    </div>
                    <div class="number_access col-md-12">
                        <div class="col-md-8 col-xs-8">
                            <img src="{{ asset('public/images/i3.png')}}">
                            <span>Số người đang xem</span>
                        </div>                            
                        <div class="col-md-4 col-xs-4">
                            <span>{{count($guest_online)}}</span>
                        </div>
                    </div>
                    <div class="number_access col-md-12">
                        <div class="col-md-8 col-xs-8">
                            <img src="{{ asset('public/images/i1.png')}}">
                            <span>Tổng số lượt truy cập</span>
                        </div>                            
                        <div class="col-md-4 col-xs-4">
                            <span>{{$setting->number_view}} </span>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
