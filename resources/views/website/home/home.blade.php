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
                <div class="col-md-12 animated fadeInLeft">
                    <span> CÔNG TY TNHH MAY MẶC QUYỀN ANH</span>
                    <p>
                        - Bằng quá trình hoạt động công ty luôn tự hào là đơn vị hàng đầu Việt Nam chuyên sản xuất, phân phối khẩu trang y tế cho thị trường trong và ngoài nước.<br/>

                        - Với công nghệ nhập khẩu từ Nhật Bản công ty đã được Trung tâm kỹ thuật tiêu chuẩn đo lường chất lượng 1 cấp chứng nhận tiêu chuẩn về sản phẩm.<br/>

                        - Với phương châm tối đa hóa lợi ích cho khách hàng công ty luôn luôn nỗ lực phấn đấu mang đến những sản phẩm, dịch vụ có giá trị hoàn hảo nhất cho khách hàng và khẳng định được thương hiệu khẩu trang y tế Quyền Anh trên thị trường.<br/>

                        - Bằng chất lượng được khẳng định bởi niềm tin và sự hài lòng của khách hàng, chúng tôi đang và sẽ tiếp tục cải tiến để có thể đem đến nhiều sản phẩm tốt hơn nữa phục vụ mọi người Việt Nam.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container content-sm">


        <div class="row margin-bottom-30">
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-compress service-icon"></i>
                    <div class="desc">
                        <h4>Mẫu mã đa dạng</h4>
                        <p> Cung cấp nhiều hình dáng và mẫu mã các loại khẩu trang </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-cogs service-icon"></i>
                    <div class="desc">
                        <h4>Cam kết chất lượng</h4>
                        <p>Sản phẩm khẩu trang kháng khuẩn đạt tiêu chuẩn </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-rocket service-icon"></i>
                    <div class="desc">
                        <h4>Vận chuyển toàn quốc</h4>
                        <p>Nhận đơn hàng và ship hàng toàn quốc</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Works -->
        <div class="headline"><h2>Sản phẩm bán chạy</h2></div>

        <div class="row margin-bottom-20">
            <?php
            $promo_product = \App\Models\Product::select('id', 'name', 'description')->where('promotion', '=', '1')->orderBy('id', 'DESC')->limit(4)->get()
            ?>
            @foreach($promo_product as $key => $promo)
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{asset('/website/img/main/img1.jpg')}}" alt="">
                            </div>
                            <a class="btn-more hover-effect"
                               href="{{route('site.detail-product',array('id'=>$promo->id,'name'=>str_slug($promo->name)))}}">Xem
                                chi tiết</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect"
                                   href="{{route('site.detail-product',array('id'=>$promo->id,'name'=>str_slug($promo->name)))}}">{{$promo->name}}</a>
                            </h3>
                            <p>{{$promo->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @include('website.layout.owl-clients')
    </div>
@endsection