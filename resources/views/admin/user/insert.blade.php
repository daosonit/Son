@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                <a href="{{route('admin.get_register')}}">Danh sách users</a>
                <small>Thêm mới users</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
                <li class="active">Danh sách user</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm user mới</h3>
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
                            {!! Form::open(['route' => 'admin.post_login']) !!}

                            <div class="form-group">
                                {!! Form::label('name', 'Tên người dùng') !!}
                                {!! Form::text('name','',array('class'=>'form-control','placeholder' => 'Vui lòng nhập tên người dùng!')) !!}
                                @if ($errors->has('name'))
                                    <div class="text-danger">{!! $errors->first('name') !!}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', '', array('class'=>'form-control','placeholder' => 'Vui lòng nhập Email!')) !!}
                                @if ($errors->has('email'))
                                    <div class="text-danger">{!! $errors->first('email') !!}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'Mật khẩu') !!}
                                {!! Form::password('password',array('class'=>'form-control','placeholder' => 'Vui lòng nhập mật khẩu!')) !!}
                                @if ($errors->has('password'))
                                    <div class="text-danger">{!! $errors->first('password') !!}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Nhắc lại mật khẩu') !!}
                                {!! Form::password('password_confirmation',array('class'=>'form-control','placeholder' => 'Vui lòng nhắc lại mâtj khẩu!')) !!}
                                @if ($errors->has('password_confirmation'))
                                    <div class="text-danger">{!! $errors->first('password_confirmation') !!}</div>
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