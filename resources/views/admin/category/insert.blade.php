@extends('admin.layout.master')
@section('css')
@endsection
@section('js')
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                <a href="{{route('admin.category.index')}}">Danh sách danh mục</a>
                <small>Thêm mới danh mục</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
                <li class="active">Thêm mới danh mục</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới danh mục</h3>
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
                            {!! Form::open(['route' => 'admin.category.store','files' => true]) !!}
                            <div class="form-group {{($errors->has('name'))?'has-error':''}}">
                                {!! Form::label('name', 'Tên danh mục') !!}
                                {!! Form::text('name','',array('class'=>'form-control','placeholder' => 'Tên navigate')) !!}
                                @if ($errors->has('name'))
                                    <div class="text-danger">{!! $errors->first('name') !!}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('type', 'Kiểu danh mục') !!}
                                {!! Form::select('type', array(1=>'Hệ thống website'),1, array('class'=>'form-control')) !!}
                            </div>

                            <div class="form-group {{($errors->has('title'))?'has-error':''}}">
                                {!! Form::label('title', 'Meta title') !!}
                                {!! Form::text('title','',array('class'=>'form-control','placeholder' => 'Meta title')) !!}
                                @if ($errors->has('title'))
                                    <div class="text-danger">{!! $errors->first('title') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('keyword'))?'has-error':''}}">
                                {!! Form::label('keyword', 'Meta keyword') !!}
                                {!! Form::text('keyword','',array('class'=>'form-control','placeholder' => 'Meta keyword')) !!}
                                @if ($errors->has('keyword'))
                                    <div class="text-danger">{!! $errors->first('keyword') !!}</div>
                                @endif
                            </div>

                            <div class="form-group {{($errors->has('description'))?'has-error':''}}">
                                {!! Form::label('description', 'Meta description') !!}
                                {!! Form::textarea('description','',array('class'=>'form-control','placeholder' => 'Meta description')) !!}
                                @if ($errors->has('description'))
                                    <div class="text-danger">{!! $errors->first('description') !!}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Thêm',array('class'=>'btn btn-primary')) !!}
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection