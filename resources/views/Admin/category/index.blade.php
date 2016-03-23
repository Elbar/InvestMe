@extends('Admin.master')
@section('title')
Categories
@endsection
@section('right')
    <aside class="right-side">
        <section class="content">
            <section class="col-lg-10 connectedSortable">
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
                                <td style="width: 50px;"><input type="button" class="btn btn-success" value="edit"></td>
                                <td style="width: 50px;"><input type="button" class="btn btn-danger" value="delete"></td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            </section>
        </section>
    </aside>
@endsection