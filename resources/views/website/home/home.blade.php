@extends('website.layout.master')
@section('js')
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{asset('/website/plugins/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/plugins/smoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/plugins/parallax-slider/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/plugins/parallax-slider/js/jquery.cslider.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('/website/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{asset('/website/js/custom.js')}}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{asset('/website/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/style-switcher.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/parallax-slider.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();
            ParallaxSlider.initParallaxSlider();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{asset('/website/plugins/respond.js')}}"></script>
    <script src="{{asset('/website/plugins/html5shiv.js')}}"></script>
    <script src="{{asset('/website/plugins/placeholder-IE-fixes.js')}}"></script>
    <![endif]-->
@endsection
@section('css')
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('/website/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/parallax-slider/css/parallax-slider.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('/website/css/custom.css')}}">
@endsection
@section('content')
    @include('website.layout.slider')

    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>trường hợp các địa danh ít người biết đến đã trở thành điểm du lịch ăn
                        khách chỉ sau một bộ phim</span>
                    <p>Sau khi bom tấn Kong: Skull Island của đạo diễn Jordan Vogt-Roberts ra rạp tại Việt Nam từ ngày
                        9/3, hàng loạt hãng lữ hành trong và ngoài nước bắt đầu mở tour mới đón khách quốc tế đến tham
                        quan các địa điểm là bối cảnh trong phim như: Quảng Bình, Ninh Bình, Hạ Long...
                        Với việc Kong: Skull Island được công chiếu trên thế giới với đa phần bối cảnh là tại Việt Nam
                        dự đoán sẽ tạo cú hích mới về du lịch tại địa điểm được chọn làm bối cảnh phim. Điều này là có
                        cơ sở vì đã có nhiều trường hợp các địa danh ít người biết đến đã trở thành điểm du lịch ăn
                        khách chỉ sau một bộ phim.</p>
                </div>
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Download Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container content-sm">
        <!-- Recent Works -->
        <div class="headline"><h2>Sản phẩm bán chạy</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="website/img/main/img1.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project One</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam
                            porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="website/img/main/img12.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Two</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam
                            porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="website/img/main/img3.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Three</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam
                            porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="website/img/main/img17.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Four</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam
                            porta sem.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recent Works -->

        <!-- Owl Clients v1 -->
        <div class="headline"><h2>Đối tác khách hàng</h2></div>
        <div class="owl-clients-v1">
            <div class="item">
                <img src="website/img/clients4/1.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/2.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/3.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/4.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/5.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/6.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/7.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/8.png" alt="">
            </div>
            <div class="item">
                <img src="website/img/clients4/9.png" alt="">
            </div>
        </div>
        <!-- End Owl Clients v1 -->
    </div>
@endsection