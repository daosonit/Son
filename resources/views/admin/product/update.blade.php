@extends('admin.layout.master')
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                <a href="{{route('admin.post.index')}}">Danh sách bài viết</a>
                <small>Sửa bài viết</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
                <li class="active">Sửa bài viết</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Sửa bài viết</h3>
                </div>

                <div class="box-body">
                    @if (session('status'))
                        <div class="alert flash-message text-center alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {!! session('status') !!}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::model($product, ['method' => 'PUT','route' => ['admin.product.update', $product->id],'file'=>true]) !!}
                            <div class="form-group {{($errors->has('name'))?'has-error':''}}">
                                {!! Form::label('name', 'Tên sản phẩm') !!}
                                {!! Form::text('name',$product->name,array('class'=>'form-control','placeholder' => 'Vui lòng nhập tên bài viết')) !!}
                                @if ($errors->has('name'))
                                    <div class="text-danger">{!! $errors->first('name') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('category_id'))?'has-error':''}}">
                                {!! Form::label('category_id', 'Danh mục bài viết') !!}
                                {!! Form::select('category_id', array(1=>'Sản phẩm'),$product->category_id, array('class'=>'form-control')) !!}
                            </div>

                            <div class="form-group {{($errors->has('title'))?'has-error':''}}">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title',$product->title,array('class'=>'form-control','placeholder' => 'Vui lòng nhập title')) !!}
                                @if ($errors->has('title'))
                                    <div class="text-danger">{!! $errors->first('title') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('keyword'))?'has-error':''}}">
                                {!! Form::label('keyword', 'Keyword') !!}
                                {!! Form::text('keyword',$product->keyword,array('class'=>'form-control','placeholder' => 'Vui lòng nhập keyword')) !!}
                                @if ($errors->has('keyword'))
                                    <div class="text-danger">{!! $errors->first('keyword') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('description'))?'has-error':''}}">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::text('description',$product->description,array('class'=>'form-control','placeholder' => 'Vui lòng nhập description')) !!}
                                @if ($errors->has('description'))
                                    <div class="text-danger">{!! $errors->first('description') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('detail'))?'has-error':''}}">
                                {!! Form::label('detail', 'Chi tiết sản phẩm') !!}
                                {!! Form::textarea('detail',$product->detail,array('class'=>'form-control','placeholder' => 'Vui lòng nhập description'))!!}
                                @if ($errors->has('detail'))
                                    <div class="text-danger">{!! $errors->first('detail') !!}</div>
                                @endif
                            </div>

                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('selling', 1, $product->selling) !!} Sản phẩm
                                    bán chạy
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('promotion', 1, $product->promotion) !!} Sản
                                    phẩm khuyến mại
                                </label>
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Sửa',array('class'=>'btn btn-primary')) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection