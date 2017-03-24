<div class="col-md-3 magazine-page">

    <div class="headline-v2 bg-color-light"><h2>Tin tức mới nhất</h2></div>
    <!-- Latest Links -->
    <?php
    $posts = \App\Models\Post::select('*')->orderBy('id', 'DESC')->limit(4)->get()
    ?>
    <ul class="list-unstyled blog-latest-posts margin-bottom-50">
        @foreach($posts as $key => $post)
            <li>
                <h3><a href="{{route('site.detail-post',array('id'=>$post->id,'name'=>str_slug($post->name)))}}">{{$post->name}}</a></h3>
                <small>Ngày đăng: {{$post->created_at}}</small>
                <p>{{$post->description}}</p>
            </li>
        @endforeach
    </ul>

    <!-- Posts -->
    <div class="posts margin-bottom-40">
        <div class="headline headline-md"><h2>Sản phẩm bán chạy</h2></div>
        <?php
        $sale_product = \App\Models\Product::select('id', 'name')->where('selling', '=', '1')->orderBy('id', 'DESC')->get()
        ?>
        @foreach($sale_product as $key => $product)
            <dl class="dl-horizontal">
                <dt><a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}"><img src="{{asset('/website/img/sliders/elastislide/6.jpg')}}" alt=""/></a></dt>
                <dd>
                    <p>
                        <a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}">{{$product->name}}</a>
                    </p>
                </dd>
            </dl>
        @endforeach
    </div>

    <div class="posts margin-bottom-40">
        <div class="headline headline-md"><h2>Sản phẩm khuyến mại</h2></div>
        <?php
        $promo_product = \App\Models\Product::select('id', 'name')->where('promotion', '=', '1')->orderBy('id', 'DESC')->get()
        ?>
        @foreach($promo_product as $key => $product)
            <dl class="dl-horizontal">
                <dt><a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}"><img src="{{asset('/website/img/sliders/elastislide/6.jpg')}}" alt=""/></a></dt>
                <dd>
                    <p>
                        <a href="{{route('site.detail-product',array('id'=>$product->id,'name'=>str_slug($product->name)))}}">{{$product->name}}</a>
                    </p>
                </dd>
            </dl>
        @endforeach
    </div>

</div>