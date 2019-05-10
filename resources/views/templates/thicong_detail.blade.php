@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li><a href="{{url('thi-cong-noi-that/'.@$news_cate->alias)}}">{{@$news_cate->name}}</a></li>
                <li class="active">{{$news_detail->name}}</li>
            </ol>
        </div>
    </div>
</div>
<content >
    <div class="container" style="margin-top: 0px;">
        <div class="row detail">
            <div class="col-xs-12 col-sm-9 col-md-19">
                <h1 style="margin-top: 0px;">{{$news_detail->name}}</h1>
                <div class="content_detail_news">{!! $news_detail->content !!}</div>
            </div>
            <div class="col-xs-12 col-md-3">
                <h4 class="tt-right">Bài viết liên quan</h4>
                @foreach($postSame as $post)
                <div class="media right_sidebar">
                    <a class="pull-left" href="{{url('thi-cong-noi-that/'.$post->alias.'.html')}}">
                        <img class="media-object" src="{{asset('upload/news/'.$post->photo)}}" alt="{{$post->name}}">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="{{url('thi-cong-noi-that/'.$post->alias.'.html')}}" title="">{{$post->name}}</a></h4>                        
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</content>

@endsection

