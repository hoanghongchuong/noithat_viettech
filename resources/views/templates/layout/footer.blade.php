<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>
<footer>
    <div class="top_footer">
        <div class="container">
            <div class="row">                    
                <div class="col-md-5">
                    <p><a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}"></a></p>
                    <div class="des-footer">{!! $setting->fax !!}</div>
                </div>
                <div class="col-md-4 center">
                    <p class="phone_f">
                        <a href="" title=""><i class="fa fa-phone icon-f"></i> 093 434 97 89</a>&nbsp
                        <a href=""><i class="fa fa-envelope icon-f"></i> hanoicitybuild@gmail.com</a>
                    </p>
                    <div class="box-map">
                        {!! $setting->iframemap !!}
                    </div>
                </div>
                <div class="col-md-3 right">
                    <p class="phone_f icon-social">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        &nbsp <a href=""><i class="fa fa-twitter"></i></a>
                        &nbsp <a href=""><i class="fa fa-youtube"></i></a>
                        &nbsp <a href=""><i class="fa fa-google"></i></a>
                    </p>
                    <!-- <p class="ht">Fanpage</p> -->
                    <div class="fb">
                        <div class="fb-page" data-href="https://www.facebook.com/CityBuild-577051449385539/" data-tabs="timeline" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CityBuild-577051449385539/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CityBuild-577051449385539/">Facebook</a></blockquote></div>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
    <div class="bot_footer">
        <p>Designed by Hungthinhads.com</p>
    </div>
</footer>
