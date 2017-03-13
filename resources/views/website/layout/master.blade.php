<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="vi"> <!--<![endif]-->
<head>
    <title>Khẩu trang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico">

    @include('website.layout.css')
    @yield('css')
</head>

<body>

<div class="wrapper">
    @include('website.layout.header')
    @yield('content')
    @include('website.layout.footer')
</div>

@include('website.layout.js')
@yield('js')
</body>
</html>
