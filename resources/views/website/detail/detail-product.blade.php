@extends('website.layout.master')
@section('js')
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{asset('/website/plugins/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/plugins/smoothScroll.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('/website/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>

    <!-- JS Customization -->
    <script type="text/javascript" src="{{asset('/website/js/custom.js')}}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{asset('/website/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/style-switcher.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/owl-recent-works.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            StyleSwitcher.initStyleSwitcher();
            OwlRecentWorks.initOwlRecentWorksV1();
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
    <link rel="stylesheet" href="{{asset('/website/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{asset('/website/css/pages/portfolio-v1.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('/website/css/custom.css')}}">
@endsection
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">{{$product->name}}</h1>

            <ul class="pull-right breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="{{route('site.listing-product')}}">Danh sách sản phẩm</a></li>
                <li class="active">{{$product->name}}</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->


    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row portfolio-item margin-bottom-50">

            <div class="col-md-7">
                <div class="carousel slide carousel-v1" id="myCarousel">
                    <div class="carousel-inner">

                        <div class="item active">
                            <img alt="" src="{{asset('website/img/main/img11.jpg')}}">
                            <div class="carousel-caption">
                                <p>Giới thiệu thông tin ảnh sản phẩm</p>
                            </div>
                        </div>

                        <div class="item">
                            <img alt="" src="{{asset('website/img/main/img11.jpg')}}">
                            <div class="carousel-caption">
                                <p>Giới thiệu thông tin ảnh sản phẩm</p>
                            </div>
                        </div>

                        <div class="item">
                            <img alt="" src="{{asset('website/img/main/img11.jpg')}}">
                            <div class="carousel-caption">
                                <p>Giới thiệu thông tin ảnh sản phẩm.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <h2>{{$product->name}}</h2>
                <p>
                    {{$product->detail}}
                </p>

                <ul class="list-unstyled">
                    <li><i class="fa fa-user color-green"></i> Ms.Loan: 0943.988.789</li>
                    <li><i class="fa fa-user color-green"></i> Ms.Loan: 0943.988.789</li>
                    <li><i class="fa fa-user color-green"></i> Ms.Loan: 0943.988.789</li>
                </ul>
                <a href="#" class="btn-u btn-u-large">Liên hệ</a>
            </div>

        </div><!--/row-->

        <div class="tag-box tag-box-v2">
            {{$product->detail}}sản phẩm được bán với giá
        </div>

        <div class="margin-bottom-20 clearfix"></div>

        <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
            <div class="headline">
                <h2 class="pull-left">Sản phẩm bán chạy</h2>

                <div class="owl-navigation">
                    <div class="customNavigation">
                        <a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
                        <a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="owl-recent-works-v1">
                <?php
                $products = \App\Models\Product::select('id', 'name','description')->where('selling', '=', '1')->orderBy('id', 'DESC')->get()
                ?>
                @foreach($products as $key => $product)
                    <div class="item">
                        <a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}">
                            <em class="overflow-hidden">
                                <img class="img-responsive" src="{{asset('website/img/main/img1.jpg')}}" alt="">
                            </em>
                            <span>
                            <strong>{{$product->name}}</strong>
                            <i>{{$product->description}}</i>
                        </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection