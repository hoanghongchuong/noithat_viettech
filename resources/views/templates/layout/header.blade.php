<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $cateProject = DB::table('news_categories')->where('com', 'du-an')->where('status',1)->where('parent_id', 0)->get();

?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="logo col-md-5 col-lg-5 col-xs-12">
                <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}"></a>
            </div>
            <div class=" col-md-7 col-lg-7 col-xs-12 info-he">                    
                <h1 class="title-name-company">Công ty CP đầu tư xây dựng & cơ điện công trình viettech</h1>               
                <p style="color: #cc0000; text-transform: uppercase;">Hotline: <span style="font-size: 19px;">{{$setting->phone}}</span></p>
                <p style="color: #000; font-family: HelB; text-transform: uppercase; font-size: 19px;">Chuyên thi công cơ điện uy tín chuyên nghiệp</p>
            </div>
        </div>
        <div class="row visible-xs visible-sm">
            <!-- <div class="logo_mobile"><a href="" title=""><img src="images/logo.png"></a></div> -->
            <div class="vk-header__search">
                <div class="container">                        
                    <a href="#menuMobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
                </div>
            </div>
            <nav class="vk-header__menu-mobile">
                <ul class="vk-menu__mobile collapse" id="menuMobile">
                    <li class=""><a href="{{url('')}}">Trang chủ</a></li>
                    <li class=""><a href="{{url('thi-cong-noi-that')}}">Thi công nội thất</a></li>
                    <!-- <li class="dropdown submenux">
                        <a href="">Thi công</a>
                        <ul class="dropdown-menu dropmenux">
                            <li><a href="#">Công trình 1</a></li>                                
                            <li><a href="#">Công trình 1</a></li>                                
                            <li><a href="#">Công trình 1</a></li>                                
                            <li><a href="#">Công trình 1</a></li>                                
                        </ul>
                    </li> -->
                    @foreach($cateProject as $cate)
                    <li><a href="{{url('du-an/'.$cate->alias)}}">{{$cate->name}}</a></li>
                    @endforeach
                    <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                    <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><!-- /header -->
<div class="menu hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="logo col-md-12 col-lg-12 col-xs-12">                    
                <ul class="list-menu">
                    <li class=""><a href="{{url('')}}">Trang chủ</a></li>
                    <li class=""><a href="{{url('thi-cong-noi-that')}}">Thi công nội thất</a></li>
                    <!-- <li class="dropdown submenux">
                        <a href="">Thi công</a>
                        <ul class="dropdown-menu dropmenux">
                            <li><a href="#">Công trình 1</a></li>                                
                            <li><a href="#">Công trình 1</a></li>                                
                            <li><a href="#">Công trình 1</a></li>                                
                            <li><a href="#">Công trình 1</a></li>                                
                        </ul>
                    </li> -->
                    @foreach($cateProject as $cate)
                    <li><a href="{{url('du-an/'.$cate->alias)}}">{{$cate->name}}</a></li>
                    @endforeach
                    <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                    <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>                    
            </div>
        </div>
    </div>
</div>