@extends('admin.layout.master')
@section('css')
@endsection
@section('js')
    <script src="{{asset('/vendors/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('contentID', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>
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
                            {!! Form::model($post, ['method' => 'PUT','route' => ['admin.post.update', $post->id],'files' => true]) !!}
                            <div class="form-group {{($errors->has('name'))?'has-error':''}}">
                                {!! Form::label('name', 'Tên bài viết') !!}
                                {!! Form::text('name',$post->name,array('class'=>'form-control','placeholder' => 'Vui lòng nhập tên bài viết')) !!}
                                @if ($errors->has('name'))
                                    <div class="text-danger">{!! $errors->first('name') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('image'))?'has-error':''}}">
                                {!!  Form::label('images', 'Ảnh đại diện') !!}

                                {!! Form::file('images',array('class'=>'form-control')) !!}
                                <span style="color: red">Kích thước ảnh 400X400</span>
                                @if($errors->has('images'))
                                    <div class="text-danger">{!! $errors->first('images') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('title'))?'has-error':''}}">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title',$post->title,array('class'=>'form-control','placeholder' => 'Vui lòng nhập title')) !!}
                                @if ($errors->has('title'))
                                    <div class="text-danger">{!! $errors->first('title') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('keyword'))?'has-error':''}}">
                                {!! Form::label('keyword', 'Keyword') !!}
                                {!! Form::text('keyword',$post->keyword,array('class'=>'form-control','placeholder' => 'Vui lòng nhập keyword')) !!}
                                @if ($errors->has('keyword'))
                                    <div class="text-danger">{!! $errors->first('keyword') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('description'))?'has-error':''}}">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::text('description',$post->description,array('class'=>'form-control','placeholder' => 'Vui lòng nhập description')) !!}
                                @if ($errors->has('description'))
                                    <div class="text-danger">{!! $errors->first('description') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('category_id'))?'has-error':''}}">
                                {!! Form::label('category_id', 'Danh mục bài viết') !!}
                                {!! Form::select('category_id', array(1=>'Tin tức'),$post->category_id, array('class'=>'form-control')) !!}
                            </div>

                            <div class="form-group {{($errors->has('content'))?'has-error':''}}">
                                {!! Form::label('content', 'Nội dung bài viết') !!}
                                {!! Form::textarea('content',$post->content,array('id'=>'contentID','class'=>'form-control','placeholder' => 'Vui lòng nhập description'))!!}
                                @if ($errors->has('content'))
                                    <div class="text-danger">{!! $errors->first('content') !!}</div>
                                @endif
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