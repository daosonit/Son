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
            @forelse($listing as $keys => $product)
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
                                <h2>
                                    <a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}">{{$product->name}}</a>
                                </h2>
                                <p>{{$product->description}}</p>
                                <ul class="list-inline posted-info">
                                    <li>Chi tiết xin liện hệ Nguyễn Văn A SDT: 0123456789</li>
                                </ul>

                                <ul class="post-shares">
                                    <li><i class="rounded-x icon-speech"></i></li>
                                    <li><i class="rounded-x icon-share"></i></li>
                                    <li><i class="rounded-x icon-heart"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!-- End News v3 -->

                    <div class="clearfix margin-bottom-20">
                        <hr>
                    </div>
                @empty
                    <div class="row margin-bottom-20">
                        <span>Không có sản phẩm nào!</span>
                    </div>
                @endforelse

                @if($listing->lastPage() >1)
                    {!! $listing->links('pagination.pagination-product') !!}
                @endif

            </div>
            <!-- End Blog All Posts -->

            @include('website.layout.left-bar')
        </div>
    </div>
    <!--=== End Blog Posts ===-->
@endsection