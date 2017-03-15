@extends('admin.layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/sweetalert/sweetalert.css')}}">
@endsection

@section('js')

@endsection

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <a href="{{route('admin.post.create')}}">Thêm mới</a>
                <small>Danh sách bài viết</small>
            </h1>
            <ol class="breadcrumb">
                <li>Trang chủ</li>
                <li class="active">Danh sách bài viết</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách bài viết</h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="text-align: center;" width="4%">STT</th>
                            <th>Tên bài viết</th>
                            <th>Danh mục</th>
                            <th>Tiêu đề</th>
                            <th style="text-align: center;" width="4%">Sửa</th>
                            <th style="text-align: center;" width="4%">Xóa</th>
                        </tr>
                        </thead>

                        <tbody>

                        @forelse($listing as $keys => $values)
                            <tr id="row_{{$values->id}}">
                                <td>{{$no++}}</td>
                                <td>{{$values->name}}</td>
                                <td>Tin tức</td>
                                <td>{{$values->title}}</td>
                                <td style="text-align: center;">
                                    <a href="{{route('admin.post.edit',array('post'=>$values->id))}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <a data-toggle="modal" href="#post_{{$values->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    @include('admin.layout.modal',array('href'=>'post_'.$values->id,'url'=>route('admin.post.destroy',$values->id)))
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                    @if($listing->lastPage() >1)
                        {!! $listing->links('pagination.default') !!}
                    @endif
                </div>

            </div>
        </section>
    </div>
@endsection