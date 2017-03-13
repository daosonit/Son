<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>{{Config::get('son.short_site')}}</b></span>
        <span class="logo-lg"><b>{{Config::get('son.site')}}</b></span>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('/asset/dist/img/user3-128x128.jpg')}}" class="user-image"
                             alt="{{Auth::guard('admin')->user()->name }}">
                        <span class="hidden-xs">{{Auth::guard('admin')->user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Thông tin cá nhân</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('admin.get_logout')}}" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
