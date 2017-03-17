@extends('website.layout.master')
@section('js')
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{asset('/website/plugins/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/plugins/smoothScroll.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{asset('/website/plugins/gmap/gmap.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('/website/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('/website/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('/website/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/custom.js')}}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{asset('/website/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/forms/login.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/forms/contact.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/pages/page_contacts.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('/website/js/plugins/style-switcher.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            ContactPage.initMap();
            LoginForm.initLoginForm();
            ContactForm.initContactForm();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{asset('/website/plugins/respond.js')}}"></script>
    <script src="{{asset('/website/plugins/html5shiv.js')}}"></script>
    <script src="{{asset('/website/plugins/placeholder-IE-fixes.js')}}"></script>
    <script src="{{asset('/website/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js')}}"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="{{asset('/website/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js')}}"></script>
    <![endif]-->
@endsection

@section('css')
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('/website/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('/website/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="{{asset('/website/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css')}}">
    <![endif]-->

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{asset('/website/css/pages/page_contact.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('/website/css/custom.css')}}">

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Liên hệ</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>

    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div id="map" class="map map-box map-box-space margin-bottom-40"></div>

                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti
                    atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita
                    distinctio
                    lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br/>

                <form action="" method="post" id="sky-form3"
                      class="sky-form contact-style">
                    <fieldset class="no-padding">
                        <label>Name <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label>Email <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label>Message <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <p>
                            <button type="submit" class="btn-u">Send Message</button>
                        </p>
                    </fieldset>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Your message was successfully sent!</p>
                    </div>
                </form>
            </div>
            @include('website.layout.left-bar')
        </div>
        @include('website.layout.owl-clients')
    </div>

@endsection