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
                <li class="active">{{$data->name}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-box content-box-page">
	<div class="container">
		<div class="row content_about">
			<h1>{{$data->name}}</h1>
			<div class="">{!! $data->content !!}</div>
			
		</div>
	</div>
</div>
@endsection

