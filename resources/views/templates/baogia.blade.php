@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-box content-box-page" style="margin-bottom: 30px;">
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="{{url('')}}">Trang chủ / </a></li>
                        <li><a href="{{url('bao-gia')}}">Báo giá</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="list_news" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    {!! $data->content !!}
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection