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

    <!--=== Blog Posts ===-->
    <div class="container content-md">
        <div class="row">
            <!-- Blog All Posts -->
            <div class="col-md-9">
            @for($i=0;$i<10;$i++)
                <!-- News v3 -->
                    <div class="row margin-bottom-20">
                        <div class="col-sm-5 sm-margin-bottom-20">
                            <div class="carousel slide" data-ride="carousel" id="blog-carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#blog-carousel" data-slide-to="0" class="active rounded-x"></li>
                                    <li data-target="#blog-carousel" data-slide-to="1" class="rounded-x"></li>
                                    <li data-target="#blog-carousel" data-slide-to="2" class="rounded-x"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="website/img/main/img19.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="website/img/main/img3.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="website/img/main/img24.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 news-v3">
                            <div class="news-v3-in-sm no-padding">
                                <h2><a href="#">Khẩu trang 4 lớp hoạt tính</a></h2>
                                <p>Đặc tính sản phẩm:
                                    Khẩu trang AsiaMask bảo vệ sức khỏe, chống không khí ô nhiễm, ứng dụng công nghệ nước ngoài với nguyên liệu hoàn toàn ngoại nhập.
                                    Khẩu trang gồm 3 lớp: 1, Lớp vải chính – 2, một lớp lọc bụi cao cấp – 3, một lớp than hoạt tính – 4,
                                    lớp vải thấm mồ hôi tạo sự thoải mái khi sử dụng sản phẩm.</p>
                                <ul class="list-inline posted-info">
                                    <li>Chi tiết xin liện hệ</li>
                                    <li>Nguyễn Văn A</li>
                                    <li>SDT: 0123456789</li>
                                </ul>
                                <ul class="post-shares">
                                    <li>
                                        <a href="#">
                                            <i class="rounded-x icon-speech"></i>
                                            <span>5</span>
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                                    <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!-- End News v3 -->

                    <div class="clearfix margin-bottom-20">
                        <hr>
                    </div>
            @endfor
                <!-- Pager v3 -->
                <ul class="pager pager-v3 pager-sm no-margin-bottom">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="page-amount">1 of 7</li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>
                <!-- End Pager v3 -->
            </div>
            <!-- End Blog All Posts -->

            <!-- Blog Sidebar -->
            <div class="col-md-3">
                <div class="headline-v2 bg-color-light"><h2>Tin tức mới nhất</h2></div>
                <!-- Trending -->
                <ul class="list-unstyled blog-trending margin-bottom-50">
                    <li>
                        <h3><a href="#">Proin dapibus ornare magna.</a></h3>
                        <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                    </li>
                    <li>
                        <h3><a href="#">Fusce at diam ante.</a></h3>
                        <small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>
                    </li>
                    <li>
                        <h3><a href="#">Donec quis consequat magna...</a></h3>
                        <small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>
                    </li>
                </ul>

                <!-- End Trending -->
                <div class="headline-v2 bg-color-light"><h2>Sản phẩm khuyến mại</h2></div>
                <!-- Latest Links -->
                <ul class="list-unstyled blog-latest-posts margin-bottom-50">
                    <li>
                        <h3><a href="#">The point of using Lorem Ipsum</a></h3>
                        <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                        <p>Phasellus ullamcorper pellentesque ex. Cras venenatis elit orci, vitae dictum elit egestas a.
                            Nunc nec auctor mauris, semper scelerisque nibh.</p>
                    </li>
                    <li>
                        <h3><a href="#">Many desktop publishing packages...</a></h3>
                        <small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
                        <p>Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.</p>
                    </li>
                </ul>
                <!-- End Latest Links -->

                <div class="headline-v2 bg-color-light"><h2>Sản phẩm bán chạy</h2></div>
                <!-- Latest Links -->
                <ul class="list-unstyled blog-latest-posts margin-bottom-50">
                    <li>
                        <h3><a href="#">The point of using Lorem Ipsum</a></h3>
                        <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                        <p>Phasellus ullamcorper pellentesque ex. Cras venenatis elit orci, vitae dictum elit egestas a.
                            Nunc nec auctor mauris, semper scelerisque nibh.</p>
                    </li>
                    <li>
                        <h3><a href="#">Many desktop publishing packages...</a></h3>
                        <small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
                        <p>Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.</p>
                    </li>
                </ul>
                <!-- End Latest Links -->

            </div>
            <!-- End Blog Sidebar -->
        </div>
    </div>
    <!--=== End Blog Posts ===-->
@endsection