<?php
	$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();

?>
@if(isset($sliders))

<div class="slider">
    <div class="">
        <div class="">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol> -->
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