@extends('admin.layout.master')
@section('css')
@endsection
@section('js')
@endsection

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <a href="{{route('admin.category.create')}}">Thêm mới</a>
                <small>Danh sách danh mục</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li class="active">Danh sách</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách danh mục</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="text-align: center;" width="4%">STT</th>
                            <th width="30%">Tên danh mục</th>
                            <th>Mô tả</th>
                            <th style="text-align: center;" width="4%">Sửa</th>
                            <th style="text-align: center;" width="4%">Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listing as $key => $values)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$values->name}}</td>
                                <td>{{$values->description}}</td>
                                <td style="text-align: center;">
                                    <a href="{{route('admin.category.edit',array('category'=>$values->id))}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <a data-toggle="modal" href="#category_{{$values->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    @include('admin.layout.modal',array('href'=>'category_'.$values->id,'url'=>route('admin.category.destroy',$values->id),))
                                </td>
                            </tr>
                        @endforeach
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