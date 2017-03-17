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

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{asset('/website/css/pages/page_404_error.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('/website/css/custom.css')}}">
@endsection
@section('content')
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Portfolio Item 1</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li class="active">Portfolio Item 1</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <div class="container content">
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v1">
                    <span class="error-v1-title">404</span>
                    <span>That’s an error!</span>
                    <p>The requested URL was not found on this server. That’s all we know.</p>
                    <a class="btn-u btn-bordered" href="/">Back Home</a>
                </div>
            </div>
        </div>
        <!--End Error Block-->
    </div>

@endsection