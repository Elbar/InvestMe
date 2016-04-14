@extends('Admin.creators.index')

@section('edit')
{{ Form::model($creator,['route'=>['creators.update',$creator->id]])}}
    {{ Form::token() }}
    <table class="table table-striped">
        <tr>
            <th style="width: 10px">#</th>
            <th>Postcode</th>
            <th>Country</th>
            <th>Home adress</th>
            <th></th>
        </tr>
        <tr>
            <td> {{ $creator->id }}</td>
            <td><input type="text" name="postcode" class="form-control" value="{{ $creator->postcode }}"></td>
            <td><input type="text" name="country" class="form-control" value="{{ $creator->country }}"></td>
            <td><input type="text" name="home_address" class="form-control" value="{{ $creator->home_address }}"></td>
            <td><input type="submit" value="Update" class="btn btn-warning"></td>
        </tr>
    </table>
{{ Form::close() }}
@endsection
