@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>                    
                <li class="active">Thi công nội thất</li>
            </ol>
        </div>
    </div>
</div>
<div class="content_category">
    <div class="container">
        <div class="row list-hot-item listx">
            @foreach($data as $item)
            <div class="box-item col-md-4">
                <a href="{{url('thi-cong-noi-that/'.$item->alias.'.html')}}" title="{{$item->name}}">
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
        <div class="row">
            <div class="paginations">{!! $data->links() !!}</div>
        </div>
    </div>
</div>

@endsection