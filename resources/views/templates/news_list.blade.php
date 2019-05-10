@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
@include('templates.layout.slider')
<content>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>{{ @$tintuc_cate->name }}</h1>
                <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{asset('public/images/icondv.png')}}">
            </div>      
        </div>
        <div class="row">
             @foreach($tintuc as $item)
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <a href="{{url('dich-vu/'.$item->alias.'.html')}}" title=""><img src="{{ asset('upload/news/'.$item->photo) }}"></a>
                </div>
                <div class="dv-text">
                    <h2>{{$item->name}}</h2>
                    <p>{!! $item->mota !!}</p>
                    <p><a href="{{url('dich-vu/'.$item->alias.'.html')}}" class="btn btn-warning" title="">Chi tiết</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</content>
@endsection