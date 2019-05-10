@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="{{url('')}}">Trang chủ / </a></li>
                <li><a href="{{url('anh-cong-trinh')}}">Công trình /</a></li>
                <li>{{$news_detail->name}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="content_detail">
    <div class="container">
        <div class="row">            
            <div class="col-md-9 col-xs-12 right">
                <h1 class="name_detail">{{$news_detail->name}}</h1>
                <div class="content_detail_post">
                    {!! $news_detail->content !!}
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <h4 class="tt-right">Bài viết liên quan</h4>
                @foreach($newsSameCate as $post)
                <div class="media right_sidebar">
                    <a class="pull-left" href="{{url('cong-trinh/'.$post->alias.'.html')}}">
                        <img class="media-object" src="{{asset('upload/news/'.$post->photo)}}" alt="{{$post->name}}">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="{{url('cong-trinh/'.$post->alias.'.html')}}" title="">{{$post->name}}</a></h4>                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection