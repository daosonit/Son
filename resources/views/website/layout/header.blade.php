<div class="header">
    <div class="container">
        <a class="logo" href="/">
            <img src="{{asset("/website/img/logo1-default.png")}}" alt="Logo">
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">

                <li class="active"><a href="/"><span> Trang chủ</span></a></li>

                <li><a href="{{route('site.listing-product')}}"> Giới thiệu </a></li>

                <li class="dropdown">
                    <a href="{{route('site.listing-product')}}" class="dropdown-toggle" data-toggle="dropdown">
                        Sản phẩm
                    </a>
                    <?php
                    $products = \App\Models\Product::select('id', 'name')->where('promotion', '=', '1')->orderBy('id', 'DESC')->get()
                    ?>
                    <ul class="dropdown-menu">
                        @foreach($products as $key => $product)
                            <li>
                                <a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}">
                                    {{$product->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{route('site.listing-post')}}"> Tin tức </a></li>
                <li><a href="{{route('site.contact')}}"> Liện hệ </a></li>

                <li>
                    <i class="search fa fa-search search-btn"></i>
                    <div class="search-open">
                        <div class="input-group animated fadeInDown">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
									<button class="btn-u" type="button">Tìm</button>
								</span>
                        </div>
                    </div>
                </li>
                <!-- End Search Block -->
            </ul>
        </div><!--/end container-->
    </div><!--/navbar-collapse-->
</div>