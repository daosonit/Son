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

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row blog-page">
            <!-- Left Sidebar -->
            <div class="col-md-9">
            @for($i=0; $i <=10; $i++)
                <!--Blog Post-->
                    <div class="blog margin-bottom-40">
                        <h2><a href="#">
                                Unify is an incredibly beautiful and fully responsive Bootstrap
                                3 Template</a></h2>
                        <div class="blog-post-tags">
                            <ul class="list-unstyled list-inline blog-info">
                                <li><i class="fa fa-calendar"></i> February 02, 2013</li>
                                <li><i class="fa fa-pencil"></i> Diana Anderson</li>
                                <li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>
                            </ul>
                            <ul class="list-unstyled list-inline blog-tags">
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Technology</a>
                                    <a href="#">Education</a>
                                    <a href="#">Internet</a>
                                    <a href="#">Media</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-img">
                            <img class="img-responsive" src="assets/img/main/img18.jpg" alt="">
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
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
                            Fusce condimentum eleifend enim a feugiat.</p>
                        <p><a class="btn-u btn-u-small" href="blog_item_option1.html"><i class="fa fa-plus-sign"></i>
                                Read
                                More</a></p>
                    </div>
                    <!--End Blog Post-->
            @endfor
            <!--Pagination-->
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!--End Pagination-->
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            <div class="col-md-3 magazine-page">
                <!-- Search Bar -->
                <div class="headline headline-md"><h2>Search</h2></div>
                <div class="input-group margin-bottom-40">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn-u" type="button">Go</button>
                    </span>
                </div>
                <!-- End Search Bar -->

                <!-- Posts -->
                <div class="posts margin-bottom-40">
                    <div class="headline headline-md"><h2>Recent Posts</h2></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt=""/></a></dt>
                        <dd>
                            <p><a href="#">Responsive Bootstrap 3 Template placerat idelo alac eratamet.</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt=""/></a></dt>
                        <dd>
                            <p><a href="#">100+ Amazing Features Layer Slider, Layer Slider, fa fas, 60+ Pages etc.</a>
                            </p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt=""/></a></dt>
                        <dd>
                            <p><a href="#">Developer Friendly Code imperdiet condime ntumi mperdiet condim.</a></p>
                        </dd>
                    </dl>
                </div><!--/posts-->
                <!-- End Posts -->

                <!-- Tabs Widget -->
                <div class="headline headline-md"><h2>Tabs Widget</h2></div>
                <div class="tab-v2 margin-bottom-40">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home-1">About Us</a></li>
                        <li><a data-toggle="tab" href="#home-2">Quick Links</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home-1" class="tab-pane active">
                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci
                                metus, ac ac adipiscing nunc.</p>
                            <p>Pellentesque fermentum, ante ac felis consectetur id. Donec eget orci metusvivamus
                                imperdiet.</p>
                        </div>
                        <div id="home-2" class="tab-pane magazine-sb-categories">
                            <div class="row">
                                <ul class="list-unstyled col-xs-6">
                                    <li><a href="#">Best Sliders</a></li>
                                    <li><a href="#">Parralax Page</a></li>
                                    <li><a href="#">Backgrounds</a></li>
                                    <li><a href="#">Parralax Slider</a></li>
                                    <li><a href="#">Responsive</a></li>
                                    <li><a href="#">800+ fa fas</a></li>
                                </ul>
                                <ul class="list-unstyled col-xs-6">
                                    <li><a href="#">60+ Pages</a></li>
                                    <li><a href="#">Layer Slider</a></li>
                                    <li><a href="#">Bootstrap 3</a></li>
                                    <li><a href="#">Fixed Header</a></li>
                                    <li><a href="#">Best Template</a></li>
                                    <li><a href="#">And Many More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tabs Widget -->

                <!-- Photo Stream -->
                <div class="headline headline-md"><h2>Photo Stream</h2></div>
                <ul class="list-unstyled blog-photos margin-bottom-30">
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/5.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/6.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/8.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/10.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/11.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/1.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/2.jpg"></a>
                    </li>
                    <li><a href="#"><img class="hover-effect" alt="" src="assets/img/sliders/elastislide/7.jpg"></a>
                    </li>
                </ul>
                <!-- End Photo Stream -->

                <!-- Blog Tags -->
                <div class="headline headline-md"><h2>Blog Tags</h2></div>
                <ul class="list-unstyled blog-tags margin-bottom-30">
                    <li><a href="#"><i class="fa fa-tags"></i> Business</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Music</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Internet</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Money</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Google</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> TV Shows</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Education</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> People</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> People</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Math</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Photos</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Electronics</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Apple</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Canada</a></li>
                </ul>
                <!-- End Blog Tags -->

                <!-- Blog Latest Tweets -->
                <div class="blog-twitter margin-bottom-40">
                    <div class="headline headline-md"><h2>Latest Tweets</h2></div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                </div>
                <!-- End Blog Latest Tweets -->

                <!-- Blog Posts -->
                <div class="row">
                    <div class="magazine-posts col-md-12 col-sm-6 margin-bottom-30">
                        <h3><a href="#">Bootstrap 3 Template</a></h3>
                        <span><i class="color-green">By htmlstream</i> / March 19, 2014</span>
                        <div class="magazine-posts-img">
                            <a href="#"><img class="img-responsive" src="assets/img/main/img10.jpg" alt=""></a>
                            <span class="magazine-badge magazine-badge-red">Unify</span>
                        </div>
                    </div>
                    <div class="magazine-posts col-md-12 col-sm-6">
                        <h3><a href="#">Parralax One Page</a></h3>
                        <span><i class="color-green">By Taylor Miller</i> / July 19, 2014</span>
                        <div class="magazine-posts-img">
                            <a href="#"><img class="img-responsive" src="assets/img/main/img1.jpg" alt=""></a>
                            <span class="magazine-badge magazine-badge-green">Bootstrap 3</span>
                        </div>
                    </div>
                </div>
                <!-- End Blog Posts -->
            </div>
            <!-- End Right Sidebar -->
        </div><!--/row-->
    </div>

@endsection