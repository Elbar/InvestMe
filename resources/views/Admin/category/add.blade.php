@extends('Admin.category.index')

    @section('edit')
        <form class="form-group" method="post" action="{{ url('categories') }}">
            {{ Form::token() }}
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="text" name="title" class="form-control" title=""></td>
                    <td><input type="submit" value="Add" class="btn btn-warning"></td>
                </tr>
            </table>
        </form>
    @endsection
