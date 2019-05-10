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
                <li class="active">Liên hệ</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-box content-box-page">

	<div class="container">
		<div class="row content_about">
			<h1>{{$about->name}}</h1>
			<div class="">{!! $about->content !!}</div>
			
		</div>
	</div>
</div>
@endsection

