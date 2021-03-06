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
            <h1 class="pull-left">{{$post->name}}</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="{{route('site.listing-post')}}">Tin tức</a></li>
                <li class="active">{{$post->name}}</li>
            </ul>
        </div>
    </div>

    <div class="container content">
        <div class="row blog-page">
            <div class="col-md-9">
                <div class="blog margin-bottom-40">
                    <h2>{{$post->name}}</h2>

                    <div class="blog-post-tags">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar"></i>&nbsp;{{$post->created_at}}</li>
                        </ul>
                    </div>

                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                        non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et
                        quam
                        lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut
                        volutpat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                        lacus.
                        Fusce condimentum eleifend enim a feugiat.

                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                        non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et
                        quam
                        lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut
                        volutpat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                        lacus.
                        Fusce condimentum eleifend enim a feugiat.

                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                        non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et
                        quam
                        lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut
                        volutpat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                        lacus.
                        Fusce condimentum eleifend enim a feugiat.


                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                        non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et
                        quam
                        lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut
                        volutpat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                        lacus.
                        Fusce condimentum eleifend enim a feugiat.

                    </p>

                </div>
            </div>
            <!-- End Left Sidebar -->
            @include('website.layout.left-bar')
        </div><!--/row-->
    </div>

@endsection