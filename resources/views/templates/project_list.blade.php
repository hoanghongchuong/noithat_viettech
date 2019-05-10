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
                <li class="active">{{$cate->name}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content_category" style="margin-top: 20px;">
    <div class="container">
        <div class="row list-hot-item listx">
            @foreach($data as $item)
            <div class="box-item col-md-4">
                <a href="{{url('du-an/'.$item->alias.'.html')}}" title="{{$item->name}}">
                    <p><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}"></p>
                    <div class="box_fix"></div>
                    <div class="short-des-home">
                        <div class="name_vk">{{$item->name}}</div>
                        <div class="readmore">
                            <span>Xem thêm</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection