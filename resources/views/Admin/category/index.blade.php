@extends('Admin.master')
@section('title')
Categories
@endsection
@section('left')
    @include('Admin.partials.leftSide')
@endsection
@section('right')
        <section class="content">
            <section class="col-lg-10 connectedSortable">
                <div class="row">
                    @if (Session::has('message'))
                        <div class="alert alert-success"> {{ Session::get('message') }} </div>
                    @endif
                </div>
                 <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Categories</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>created at</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td style="width: 50px;">
                                    <a href="{{ url('category/edit',$category->id) }}">
                                        <input type="button" class="btn btn-success" value="edit">
                                    </a>
                                </td>
                                <td style="width: 50px;">
                                    <a href="{{ url('category/delete',$category->id) }}">
                                        <input type="button" class="btn btn-danger" value="delete">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="box-footer">
                        <div class="col-md-offset-11">
                            <a href="{{ url('categories/create') }}">
                                <input style="width: 70px" type="button" class="btn btn-primary" value="Add">
                            </a>
                        </div>
                    </div>
                    @yield('edit')
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            </section>
        </section>
@endsection