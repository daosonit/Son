<?php

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/asset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::guard('admin')->user()->name }}</p>
                <a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            @forelse(Navigate::getNavAdmin() as $key => $menu)
                <li class="treeview <?=(get_as_route($menu->action_route)) ? 'active' : '' ?>">
                    <a href="#">
                        <i class="fa fa-circle-o text-aqua"></i>
                        <strong>{{$menu->name}}</strong>
                        <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                    </a>

                    <ul class="treeview-menu">
                        @forelse($menu->getNavItem as $item => $menu_item)
                            @if(Route::has($menu_item->route))
                                <li>
                                    <a href="{{route($menu_item->route)}}">
                                        <i class="fa fa-circle-o"></i> <span>{{$menu_item->name}}</span>
                                    </a>
                                </li>
                            @endif
                        @empty
                        @endforelse
                    </ul>

                </li>
            @empty
            @endforelse
        </ul>

    </section>
</aside>
