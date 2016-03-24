@extends('Admin.category.index')

    @section('edit')
        <form class="form-group" method="post" action="{{ url('category',$category->id) }}">
            {{ Form::token() }}
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th></th>
                </tr>
                    <tr>
                        <td> {{ $category->id }}</td>
                        <td><input type="text" name="title" class="form-control" value="{{ $category->title }}"></td>
                        <td><input type="submit" value="Update" class="btn btn-warning"></td>
                    </tr>
            </table>
        </form>
    @endsection
