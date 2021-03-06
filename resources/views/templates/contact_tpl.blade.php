@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="box-contact-home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <p class="title-about-home">Liên hệ</p>               
                <form action="{{route('postContact')}}" method="post" id="form-contact" accept-charset="utf-8">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <input type="text" name="name" required="" class="form-control" value="" placeholder="Họ tên">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" required="" class="form-control" value="" placeholder="Số điện thoại">
                    </div>
                     <div class="col-md-6">
                        <input type="email" name="email" required="" class="form-control" value="" placeholder="Email">
                    </div>
                     <div class="col-md-6">
                        <input type="text" name="address" required="" class="form-control" value="" placeholder="Địa chỉ">
                    </div>
                    <div class="col-md-12">
                        <textarea name="content" class="form-control" rows="5" placeholder="Nội dung"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-send">Gửi</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="box-mapx">
                    {!! $setting->iframemap !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
